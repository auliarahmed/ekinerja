<?php 
session_start();
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_kategori = $_GET['id_kategori'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_kategori where id_kategori='$id_kategori'");
 
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");
 
?>