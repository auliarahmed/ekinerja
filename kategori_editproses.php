<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
$level = $_POST['level'];
 
// update data ke database
mysqli_query($koneksi,"update tb_kategori set kategori='$kategori', level='$level' where id_kategori='$id_kategori'");
 
// mengalihkan halaman kembali ke index.php

header("location:kategori.php");
?>