<?php 
session_start();
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_laporan = $_POST['id_laporan'];
$tgl_input = $_POST['tgl_input'];
$kegiatan = $_POST['kegiatan'];
$uraian = $_POST['uraian'];
$waktu = $_POST['waktu'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"update tb_laporan set tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu', status='$status' where id_laporan='$id_laporan'");
 
// mengalihkan halaman kembali ke index.php

header("location:laporan.php");
?>