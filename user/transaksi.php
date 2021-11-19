<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar_pelanggan.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card border-dark mb-3">
            <div class="card-header">
                <h1>History Pembelian Produk</h1>
            </div>
            <div class="card-body">
            <table class="table table-dark table-stripped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Beli</th>
                    <th scope="col">Id Pelanggan</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                <?php
 include "koneksi.php";
     $query_histori=mysqli_query($koneksi,"select * from transaksi order by id_transaksi desc");
     $no=0;
    while($data_histori=mysqli_fetch_array($query_histori)){
    $no++;
 //menampilkan buku yang dipinjam
    $produk_dibeli="<ol>";
    $harga="<ul>";

 
    $query_get_produk=mysqli_query($koneksi,"select * from 
                          detail_transaksi join produk on 
                          produk.id_produk=detail_transaksi.id_produk 
                          where id_transaksi = '".$data_histori['id_transaksi']."'");

    while($data_produk=mysqli_fetch_array($query_get_produk)){
                          $produk_dibeli.="<li>".$data_produk['nama_produk']."</li>";
                          $harga.="<ul>".$data_produk['harga']."</ul>";
 }
    $produk_dibeli.="</ol>";
    $harga.="</ul>";

 ?>
 <tr>

<td><?=$no?></td><td><?=$data_histori['tgl_transaksi']?></td><td><?=$data_histori['id_pelanggan']?></td><td><?=$produk_dibeli?></td><td><?=$harga?></td>
 </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>


</body>
</html>