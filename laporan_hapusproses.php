<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_laporan = $_GET['id_laporan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_laporan where id_laporan='$id_laporan'");
 
// mengalihkan halaman kembali ke index.php
header("location:laporan.php");
 
?>