<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
$host = "localhost"; // Nama hostnya
$user = "ukpbj_ekinerja"; // Username
$pass = "lp53t4l4k4b"; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "ukpbj_ekinerja"); // Koneksi ke MySQL
?>