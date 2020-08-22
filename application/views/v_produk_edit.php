<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div>
	<h2>Tambah Data Produk</h2>
</div>
<?php foreach ($produk as $p) {?>
<form action="<?php echo base_url().'index.php/controller/update_data' ?>" method="post">
	<div class="col">
		<div class="col-md-6">
			 <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input type="hidden" class="form-control" name="id" value="<?= $p->id; ?>">
			    <input type="text" class="form-control" name="nama_produk" value="<?= $p->nama_produk; ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Keterangan</label>
			    <input type="text" class="form-control"  name="keterangan" value="<?= $p->keterangan; ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga</label>
			    <input type="number" class="form-control" name="harga" value="<?= $p->harga; ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input type="number" class="form-control"  name="jumlah" value="<?= $p->jumlah; ?>">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
<?php }?>
</body>
</html>