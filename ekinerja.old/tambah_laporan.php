<?php
session_start();
date_default_timezone_set('Asia/Makassar');
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$level = $_SESSION['level'];
$kegiatan = $_POST['kegiatan'];
$uraian = $_POST['uraian'];
$tgl_server = date("Y-m-d H:i:s");
$waktu = $_POST['waktu'];
$tgl_input = date("Y-m-d", strtotime($_POST['tgl_input']));
// menginput data ke database
//$sql = "INSERT INTO users (ime, prezime, godiste, jmbg, adresa, emal, telefon, datum) VALUES ('".$values."', '".$values2."', '".$values3."', '".$values4."', '".$values5."', '".$values6."', '".$values7."', '".$values8."')";
mysqli_query($koneksi,"INSERT INTO tb_laporan (id_laporan, level, kegiatan, uraian, tgl_server, waktu, tgl_input) VALUES ('','$level','$kegiatan','$uraian','$tgl_server','T','$waktu','$tgl_input')");
// mengalihkan halaman kembali ke index.php
header("location:form.php");
?>