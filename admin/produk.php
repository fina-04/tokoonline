<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
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
    <h1 class= "text-center">Data Produk</h1>
        <form action="produk.php" method="POST" class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    <div class="card-body">
        <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto Produk</th>
            <th scope="col">Aksi</th>


        </tr>
  </thead>
  <tbody>
      <?php
      include "koneksi.php";
      if (isset($_POST["cari"])) {
          //jika ada keyword pencarian
          $cari = $_POST['cari'];
          $qry_produk = mysqli_query($koneksi, "select * from produk where id_produk='$cari' or nama_produk like'%$cari%'");
      }
      else {
      $qry_produk=mysqli_query($koneksi,"select * from produk");
      }

      while($data_produk=mysqli_fetch_array($qry_produk)){
      ?>
        <tr>
            <td><?php echo $data_produk["id_produk"]; ?></td>
            <td><?php echo $data_produk["nama_produk"]; ?></td>
            <td><?php echo $data_produk["deskripsi"]; ?></td>
            <td><?php echo $data_produk["harga"]; ?></td>
            <td><img src="foto/<?=$data_produk['foto_produk']?>"style="width: 120px;float: left;margin-bottom: 5px;"></td>
            <td>
            <a href="ubah_produk.php?id_produk=<?=$data_produk['id_produk']?>" class="btn btn-success">Ubah</a>
            <a href="hapus_produk.php?id_produk=<?=$data_produk['id_produk']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <td><a href="tambah_produk.php" class="btn btn-secondary">Tambah Produk</a></td>
    </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>