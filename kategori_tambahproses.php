<?php
//session_start();
//if($_SESSION['status']!="login"){
//    header("location:index.php?pesan=belum_login");
//}
// koneksi database
//include 'koneksi.php';
// menangkap data yang di kirim dari form
//$kategori = $_POST['kategori'];
//$level = $_POST['level'];
// menginput data ke database
//mysqli_query($koneksi,"INSERT INTO tb_kategori (id_kategori, kategori, level) VALUES (,$kategori,$level)");
// mengalihkan halaman kembali ke index.php

session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}

$servername = "localhost";
$username = "ukpbj_ekinerja";
$password = "lp53t4l4k4b";
$dbname = "ukpbj_ekinerja";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$kategori = $_POST['kategori'];
$level = $_POST['level'];

$sql = "INSERT INTO tb_kategori (kategori,level) VALUES ('$kategori','$level')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
    header("location:kategori.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>