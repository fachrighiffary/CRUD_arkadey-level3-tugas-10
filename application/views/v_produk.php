<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <h1>Data Produk</h1>
  <div class="mb-3 p-3">
    <a href="<?php echo base_url('index.php/controller/tambah');?>"> <button type="button" class="btn btn-success">+ Produk</button> </a>
  </div>
  
  <body>
    <div class="p-3">
      <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">keterangan</th>
          <th scope="col">harga</th>
          <th scope="col">jumlah</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no =1;
        foreach ($produk as $p) {?>
        <tr>
          <th scope="row"><?php echo $no ++?></th>
          <td><?php echo $p->nama_produk  ?></td>
          <td><?php echo $p->keterangan  ?></td>
          <td>Rp. <?php echo $p->harga  ?>,-</td>
          <td><?php echo $p->jumlah  ?></td>
          <td>
            <a class="btn btn-primary" href="<?php echo base_url().'index.php/controller/edit/'.$p->id; ?>">Edit</a>
            <a class="btn btn-danger" href="<?php echo base_url().'index.php/controller/hapus/'.$p->id; ?>">Hapus</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>