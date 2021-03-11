<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_akun = $_GET['id_akun'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_akun where id_akun='$id_akun'");
 
// mengalihkan halaman kembali ke index.php
header("location:pengguna.php");
 
?>