<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
       body {
            
            background-color: #2B2B2B;
        }
    </style>

</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_produk = mysqli_query($koneksi, "select* from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_get_produk);
    ?>
     <div class="p-3 mb-2 text-white">
  
    <div class = "container">
    <h3  class = "text-center">Ubah Produk</h3> 
    <form action="proses_ubah_produk.php" method="post" enctype="multipart/form-data">
        <input type = "hidden" name="id_produk" value ="<?=$dt_produk['id_produk']?>">
        Nama Produk :
        <br><input type ="text" name ="nama_produk" value ="<?=$dt_produk['nama_produk']?>" class = "form-control"></br>

        Deskripsi :
        <br><textarea name="deskripsi" class="form-control" rows="4"><?=$dt_produk['deskripsi']?></textarea></br>

        Harga :
        <br><input type ="text" name ="harga" value ="<?=$dt_produk['harga']?>" class = "form-control"></br>

        Foto Produk : 
        
        <?php echo $dt_produk['foto_produk']?>
        <br><img src="foto/<?php echo $dt_produk['foto_produk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"></br>
          <br><br><br><input type="file" name="foto_produk" class="form-control"/></br>
          <i style="float: left;font-size: 11px;color: light">Abaikan jika tidak merubah gambar produk</i>
          
        <br><input type="submit" name="simpan" value="Ubah Produk" class="btn btn-secondary">
        </br>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
</body>
</html>