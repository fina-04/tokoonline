<?php
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='login_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='login_pelanggan.php';</script>";
    } else {

    include "koneksi.php";
    $qry_login=mysqli_query($koneksi,"select * from pelanggan where username = '".$username."' and password = '".md5($password)."'");
    if(mysqli_num_rows($qry_login)>0){
        $dt_login=mysqli_fetch_array($qry_login);session_start();
        $_SESSION['id_pelanggan']=$dt_login['id_pelanggan'];
        $_SESSION['nama']=$dt_login['nama'];
        $_SESSION['alamat']=$dt_login['alamat'];
        $_SESSION['telp']=$dt_login['telp'];
        $_SESSION['status_login']=true;
        echo "<script>alert('Login Berhasil');location.href='home_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Username dan Password tidak benar');location.href='login_pelanggan.php';</script>";
    }
}
}
?>