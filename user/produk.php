<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar_pelanggan.php";
        include "koneksi.php";
        // '".$_GET['id_produk']."'
        $tampilan_isi = "select * from produk where id_produk = 4";
        $qry_detail_produk = mysqli_query($koneksi, $tampilan_isi);
        $data_produk = mysqli_fetch_array($qry_detail_produk);
    ?>
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Detail Produk</h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="../petugas/foto/<?=$data_produk['foto_produk']?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form action="insert_cart.php?" method="POST">
                <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Nama Produk</td>
                            <td><?=$data_produk['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?=$data_produk['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?=$data_produk['harga']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Produk</td>
                            <td><input type="number" name="jumlah_produk" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-dark" value="Check Out"></td>
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>

    </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>