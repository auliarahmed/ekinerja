<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_laporan = $_POST['id_laporan'];
$status = $_POST['status'];

// update data ke database
mysqli_query($koneksi,"update tb_laporan set status='$status' where id_laporan='$id_laporan'");
 
// mengalihkan halaman kembali ke index.php

header("location:laporan.php");
?>