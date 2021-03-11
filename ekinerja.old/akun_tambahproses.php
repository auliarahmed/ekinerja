<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$nama = $_POST['nama'];
// menginput data ke database
mysqli_query($koneksi,"insert into tb_akun values('','$username','$password','$level','$nama')");
// mengalihkan halaman kembali ke index.php
header("location:pengguna.php");
?>