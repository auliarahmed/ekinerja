<?php
// session_start();
// if($_SESSION['status']!="login"){
//     header("location:index.php?pesan=belum_login");
// }

// date_default_timezone_set('Asia/Makassar');
// // koneksi database
// include 'koneksi.php';

// // // menangkap data yang di kirim dari form
// $level = $_SESSION['level'];
// $kegiatan = $_POST['kegiatan'];
// $uraian = $_POST['uraian'];
// $tgl_server = date("Y-m-d H:i:s");
// $waktu = $_POST['waktu'];
// $tgl_input = date("Y-m-d", strtotime($_POST['tgl_input']));

// // menginput data ke database
// mysqli_query($koneksi,"insert into tb_laporan values('','$level','$kegiatan','$uraian','$tgl_server','T','$waktu','$tgl_input')");

// // mengalihkan halaman kembali ke index.php
// header("location:form.php");

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

$level = $_SESSION['level'];
$kegiatan = $_POST['kegiatan'];
$uraian = $_POST['uraian'];
$tgl_server = date("Y-m-d H:i:s");
$waktu = $_POST['waktu'];
$tgl_input = date("Y-m-d", strtotime($_POST['tgl_input']));

$sql = "INSERT INTO tb_laporan (level, kegiatan, uraian, tgl_server, waktu, tgl_input, status) VALUES ('$level','$kegiatan','$uraian','$tgl_server','$waktu','$tgl_input','T')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
    header("location:laporan.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>