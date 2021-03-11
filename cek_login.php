<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_akun where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    // $_SESSION['username'] = $username;

    $row_akun = mysqli_fetch_array($data);
    $_SESSION["username"] = $row_akun["username"];
    $_SESSION["nama"] = $row_akun["nama"];
    $_SESSION["level"] = $row_akun["level"];
    //

    //
	$_SESSION['status'] = "login";
	header("location:halaman.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>