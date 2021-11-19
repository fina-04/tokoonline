<?php
if($_POST){
$id_produk=$_POST['id_produk'];
$nama_produk=$_POST['nama_produk'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];

if(empty($nama_produk)){
    echo "<script>alert('nama produk tidak boleh kosong');location.href='produk.php';</script>";
} elseif(empty($deskripsi)){
    echo "<script>alert('deskripsi tidak boleh kosong');location.href='produk.php';</script>";
}elseif(empty($harga)){
    echo "<script>alert('harga tidak boleh kosong');location.href='produk.php';</script>";
} else {
include "koneksi.php";

$update=mysqli_query($koneksi,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."',harga='".$harga."' where id_produk = '".$id_produk."' ") or die(mysqli_error($conn));
if($update){
    echo "<script>alert('Sukses update produk');location.href='produk.php';</script>";
} else {
    echo "<script>alert('Gagal update produk');location.href='produk.php?id_produk=".$id_produk."';</script>";
}
}
}
?>