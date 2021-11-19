<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
    include "navbar_petugas.php";
    ?>
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
    <h1 class= "text-center">Data Pelanggan</h1>
        <form action="produk.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    <div class="card-body">
        <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID Pelanggan</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telp</th>
            <th scope="col">Aksi</th>


        </tr>
  </thead>
  <tbody>
      <?php
      include "koneksi.php";
      if (isset($_POST["cari"])) {
          //jika ada keyword pencarian
          $cari = $_POST['cari'];
          $qry_pelanggan = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan='$cari' or nama_pelanggan like'%$cari%'");
      }
      else {
      $qry_pelanggan=mysqli_query($koneksi,"select * from pelanggan");
      }

      while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){
      ?>
        <tr>
            <td><?php echo $data_pelanggan["id_pelanggan"]; ?></td>
            <td><?php echo $data_pelanggan["nama"]; ?></td>
            <td><?php echo $data_pelanggan["alamat"]; ?></td>
            <td><?php echo $data_pelanggan["telp"]; ?></td>
            <td>
            <a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success">Ubah</a>
            <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>