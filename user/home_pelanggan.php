<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include "navbar_pelanggan.php";
    ?>

    <h1 class="text-center">Selamat Datang <?=$_SESSION['nama']?></h1>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <main>
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Daftar Produk</h1>
            <p class="lead text-muted">Silakan cari produk yang ingin dibeli</p>
            <form method="POST" action="home_pelanggan.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari"
                    placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          include "koneksi.php";
          if (isset($_POST['cari'])) {
              $cari = $_POST['cari'];
              $query_produk = mysqli_query($koneksi, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%'");
          }
          else{
              $query_produk = mysqli_query($koneksi, "select * from produk");
          }
          while($data_produk = mysqli_fetch_array($query_produk)){
          ?>  
          <div class="col">
            <div class="card shadow-sm">
                <img src="../admin/foto/<?=$data_produk['foto_produk']?>" class="bd-placeholder-img card-img-top" width="400px" height="500px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/></img>

                <div class="card-body">
                <p class="card-text"><b><?=$data_produk['nama_produk']?></b></p>
                <p class="card-text"><?=$data_produk['deskripsi']?></p>
                <p class="card-text text-muted"><b>Rp. <?=$data_produk['harga']?>,00.</b></p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="produk.php?id_buku=<?=$data_produk['id_produk']?>" type="button" class="btn btn-sm btn-outline-dark">Lihat Detail</a>
                    </div>
                    <!-- <small class="text-muted text-primary"><?=$data_produk['harga']?></small> -->
                </div>
                </div>
            </div>
            </div>
          <?php
          }
          ?>
        </div>
        </div>
    </div>

    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>