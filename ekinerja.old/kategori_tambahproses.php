<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kategori = $_POST['kategori'];
$level = $_POST['level'];
// menginput data ke database
mysqli_query($koneksi,"insert into tb_kategori values('','$kategori','$level')");
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");
?>