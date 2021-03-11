<?php 
ob_start(); 
session_start();
date_default_timezone_set("Asia/Makassar");
?>
<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;
      width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }

    .right {
      overflow: auto;
    }

  </style>
</head>
<body>
<table>
<col width="1050">
<tr align="center">
<td><b>Laporan Harian Kinerja Tenaga Ahli</b></td>
</tr>
<tr align="center">
<td><b>LPSE Kab. Tanah Laut</b></td>
</tr>

    
  <?php
  // Load file koneksi.php
  include "cetakkoneksi.php";
  $status='Y';
  $level=$_SESSION['level'];
  
  if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter
    $filter = $_GET['filter']; // Ambil data filder yang dipilih user
    if($filter == '1'){ // Jika filter nya 1 (per tanggal)
      $tgl_input = date('d-m-y', strtotime($_GET['tanggal']));
      echo '<tr align="center"><td><b>Periode/Per Tanggal : '.$tgl_input.'</b></td></tr>';
      $query = "SELECT * FROM tb_laporan WHERE level='$level' and status='$status' AND DATE(tgl_input)='".$_GET['tanggal']."'"; // Tampilkan data tb_laporan sesuai tanggal yang diinput oleh user pada filter
    }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
      $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
      echo '<tr align="center"><td><b>Periode/Per Bulan : '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b></td></tr>';
      $query = "SELECT * FROM tb_laporan WHERE level='$level' and status='$status' AND MONTH(tgl_input)='".$_GET['bulan']."' AND YEAR(tgl_input)='".$_GET['tahun']."'"; // Tampilkan data tb_laporan sesuai bulan dan tahun yang diinput oleh user pada filter
    }else{ // Jika filter nya 3 (per tahun)
      echo '<tr align="center"><td><b>Periode/Per Tahun : '.$_GET['tahun'].'</b></td></tr>';
      $query = "SELECT * FROM tb_laporan WHERE level='$level' and status='$status' AND YEAR(tgl_input)='".$_GET['tahun']."'"; // Tampilkan data tb_laporan sesuai tahun yang diinput oleh user pada filter
    }
  }else{ // Jika user tidak memilih filter
    echo '<b>Semua Data Laporan</b><br /><br />';
    $query = "SELECT * FROM tb_laporan WHERE level='$level' and status='$status' ORDER BY tgl_input"; // Tampilkan semua data tb_laporan diurutkan berdasarkan tanggal
  }
  ?>
</table>
<br>

<table>
    <col width="50">
<col width="5">
<col width="400">
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $_SESSION['nama']; ?></td>
    </tr>
    <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><?php echo $_SESSION['level']; ?></td>
    </tr>
    </table>

  <table border="1" cellpadding="8">
  <col width="70">
<col width="550">
<col width="425">
  <tr>
    <th align="center">Tanggal</th>
    <th align="center">Kegiatan Pokok</th>
    <th align="center">Uraian Kerja</th>
  </tr>
  <?php
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
  if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      $tgl_input = date('d-m-Y', strtotime($data['tgl_input'])); // Ubah format tanggal jadi dd-mm-yyyy
      echo "<tr>";
      echo "<td align='center'>".$tgl_input."</td>";
      echo "<td>".$data['kegiatan']."</td>";
      echo "<td>".$data['uraian']."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
  }
  ?>
  <br>
  </table>
<br>
  <table cellpadding="8">
  <col width="250">
<col width="270">
<col width="340">
<col width="250">
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td align="left">Pelaihari, 
  <?php
  function tgl_indo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
   
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }
  echo tgl_indo(date('Y-m-d'));
  ?></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">Yang membuat laporan,</td>
  <td></td>
  <td align="left">Penerima laporan,</td>
  </tr>
  <tr>
  <td></td>
  <td align="left">Pelaksana Admin Sistem LPSE</td>
  <td></td>
  <td align="left">Kasubag LPSE Kab. Tanah Laut</td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left"><b><?php echo $_SESSION['nama']; ?></b></td>
  <td></td>
  <td align="left"><b>Mahyuni Hidayat, S.E</b></td>
  </tr>
  <tr>
  <td></td>
  <td align="left"></td>
  <td></td>
  <td align="left">NIP. 19780606 200801 1 026</td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td align="left">Mengetahui,</td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td align="left">Kabag. Pengadaan Barang dan Jasa</td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td align="left"><b>Syakhril Hadrianadi, ST</b></td>
  <td align="left"></td>
  </tr>
  <tr>
  <td></td>
  <td align="left">&nbsp;</td>
  <td align="left">NIP. 19750412 199603 1 002</td>
  <td align="left"></td>
  </tr>
  </table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once('plugins/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Laporan E-Kinerja.pdf', 'D');
?>