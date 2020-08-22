<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		date_default_timezone_get('Asia/Jakarta');
		$this->load->model('mod_data');
	}

	public function index()
	{
		$data['produk'] = $this->db->query('SELECT * from produk')->result();
		$this->load->view('v_produk', $data);
	}

	public function tambah() 
	{
		$this->load->view('v_produk_tambah');
	}
	public function tambah_action () 
	{
		$nama = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$data = array(

			'nama_produk'  => $nama,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah,
		);

		$this->mod_data->input_data('produk', $data);

		redirect('controller/index');
	}

		public function hapus($id)
		{
		$where = array(
			'id' => $id
		);

		$this->mod_data->delete_data($where, 'produk');
		redirect('controller/index');
	}

	public function edit ($id){
		$where = array(
			'id' => $id
		);
		$data['produk'] = $this->mod_data->edit_data($where,'produk')->result();
		$this->load->view('v_produk_edit', $data);
	}

	public function update_data(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$where = array (
			'id' => $id
		);

		$data = array(
			'nama_produk'  => $nama,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah,
		);
		$this->mod_data->update_data($where,$data,'produk');
		redirect('controller/index');
	}
}
