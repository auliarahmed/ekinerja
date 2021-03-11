<?php 
// session_start();
// if($_SESSION['status']!="login"){
//     header("location:index.php?pesan=belum_login");
// }

// // koneksi database
// include 'koneksi.php';
 
// // menangkap data yang di kirim dari form
// $id_laporan = $_POST['id_laporan'];
// $tgl_input = $_POST['tgl_input'];
// $kegiatan = $_POST['kegiatan'];
// $uraian = $_POST['uraian'];
// $waktu = $_POST['waktu'];
// $status = $_POST['status'];
 
// // update data ke database
// mysqli_query($koneksi,"update tb_laporan set tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu', status='$status' where id_laporan='$id_laporan'");
 
// mysqli_close($koneksi);

// // mengalihkan halaman kembali ke index.php
// header("location:laporan.php");

// diedit 18042019 //

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

$id_laporan = $_POST['id_laporan'];
$tgl_input = $_POST['tgl_input'];
$kegiatan = $_POST['kegiatan'];
$uraian = $_POST['uraian'];
$waktu = $_POST['waktu'];
//$status = $_POST['status'];

//$sql = "UPDATE tb_laporan SET tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu', status='$status' WHERE id_laporan='$id_laporan'";
//$sql = "UPDATE tb_laporan SET tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu' WHERE id_laporan='$id_laporan'";

                        if ($level =='adminsistem'){
                      $sql = "UPDATE tb_laporan SET tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu' WHERE id_laporan='$id_laporan'";
                      }elseif($level =='helpdesk'){
                      $sql = "UPDATE tb_laporan SET tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu' WHERE id_laporan='$id_laporan'";
                      }else{
                      $status = $_POST['status'];
                      $sql = "UPDATE tb_laporan SET tgl_input='$tgl_input', kegiatan='$kegiatan', uraian='$uraian', waktu='$waktu', status='$status' WHERE id_laporan='$id_laporan'";
                      }

if (mysqli_query($conn, $sql)) {
    header("location:laporan.php");
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>