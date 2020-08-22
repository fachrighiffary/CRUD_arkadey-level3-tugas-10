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
<form action="<?php echo base_url().'index.php/controller/tambah_action' ?>" method="post">
	<div class="col">
		<div class="col-md-6">
			 <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input type="text" class="form-control" name="nama_produk">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Keterangan</label>
			    <input type="text" class="form-control"  name="keterangan">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga</label>
			    <input type="number" class="form-control" name="harga">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input type="number" class="form-control"  name="jumlah">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</div>
		
	</div>
 
</form>
</body>
</html>