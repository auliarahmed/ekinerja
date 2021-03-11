<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_laporan = $_POST['id_laporan'];

// update data ke database
mysqli_query($koneksi,"update tb_laporan set $status='Y' where id_laporan='$id_laporan'");
 
// mengalihkan halaman kembali ke index.php

header("location:laporan.php");
?>