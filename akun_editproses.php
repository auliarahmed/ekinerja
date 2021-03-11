<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}

// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_akun = $_POST['id_akun'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$nama = $_POST['nama'];
 
// update data ke database
mysqli_query($koneksi,"update tb_akun set username='$username', password='$password', level='$level', nama='$nama' where id_akun='$id_akun'");
 
// mengalihkan halaman kembali ke index.php

header("location:pengguna.php");
?>