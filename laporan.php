<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data Laporan | E-Kinerja LPSE Kab. Tanah Laut</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		  <script src="jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<!-- cek apakah sudah login -->
		<?php
		session_start();
		if($_SESSION['status']!="login"){
			header("location:index.php?pesan=belum_login");
		}
		?>
		<div class="wrapper">
			<!---------------------------------MULAI HEADER------------------------------------>
			<header class="main-header">
				<!-- Logo -->
				<a href="halaman.php" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>e-</b>K</span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>e-Kinerja</b></span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- MULAI ICON NOTIF -->
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning">10</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have 10 notifications</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li>
												<a href="#">
													<i class="fa fa-users text-aqua"></i> 5 new members joined today
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
													page and may cause design problems
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-users text-red"></i> 5 new members joined
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-shopping-cart text-green"></i> 25 sales made
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-red"></i> You changed your username
												</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#">View all</a></li>
								</ul>
							</li>
							<!-- AKHIR ICON NOTIF -->
							<!-- MULAI ICON ORANG -->
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
									<span class="hidden-xs">&nbsp;</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
										<p>
											<?php echo $_SESSION['nama']; ?><br>Jabatan :
											<?php echo $_SESSION['level']; ?>.
										</p>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<!-- <div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Profile</a>
										</div> -->
										<div class="pull-right" style="text-align:center;">
											<a href="logout.php" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Keluar</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-----------------------AKHIR HEADER----------------------------->
			<!-----------------------************----------------------------->
			<!-----------------------MULAI SIDEBARKIRI----------------------------->
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>
								<?php echo $_SESSION['nama']; ?>
							</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- AWAL YG DIPAKAI  -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">MENU UTAMA</li>
						<!--***-->
						<li>
							<a href="halaman.php">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>
						<li class="active treeview">
							<a href="#">
								<i class="glyphicon glyphicon-folder-open"></i> <span>Laporan</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
            <?php
            $level=$_SESSION['level'];
            if($level =='helpdesk'){?>
              
              <li><a href="form.php"><i class="fa fa-edit"></i> Buat Laporan</a></li>              
            
            <?}elseif ($level =='adminsistem') {?>
              
              <li><a href="form.php"><i class="fa fa-edit"></i> Buat Laporan</a></li>              
           
            <?}else {
              
            }?>
            
            <li class="active"><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Data Laporan</a></li>
            </ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="pengguna.php"><i class="glyphicon glyphicon-user"></i> Pengguna</a></li>
								<li><a href="kategori.php"><i class="glyphicon glyphicon-paperclip"></i> Kategori</a></li>
							</ul>
						</li>
						<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> <span>Keluar</span></a></li>
						<!--***-->
						<!--AKHIR YG DIPAKAI  -->
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<!-----------------------AKHIR SIDEBARKIRI----------------------------->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
					<small>E-Kinerja 1.0</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Data Laporan</a></li>
						<!-- <li class="active">Dashboard</li> -->
					</ol>
					<br>
					<div class="box box-primary box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Data Laporan</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						
						<div class="box-body">
							<form role="form" action="POST">
								<div class="box-body">
									<!-- <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-block btn-default btn-flat"><i class="glyphicon glyphicon-plus"></i>&nbsp; Tambah Pengguna</button> -->
									<!-- ISI  -->
									<!-- <br> -->
									<!-- TABLE AWAL -->
									<?php
									if ($level =='adminsistem'){?>
										<a href="cetak.php"><button type="button" class="btn btn-block btn-default btn-flat" data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak Laporan</button></a><br>
										<?}elseif($level =='helpdesk'){?>
											<a href="cetakhelp.php"><button type="button" class="btn btn-block btn-default btn-flat" data-toggle="tooltip" data-placement="bottom" ><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak Laporan</button></a><br>
										<?}else{?>
										
										<?}
									?>

									<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" style="width:100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Kegiatan Pokok</th>
												<th>Uraian Kerja</th>
												<?php
												$level=$_SESSION['level'];
												if ($level =='helpdesk'){
														echo '';
															}else{
														echo '<th>Waktu</th>';
															}
												?>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<!-- SHOW DATA BEGIN -->
											 <?php
														$conn = new mysqli("localhost", "ukpbj_ekinerja", "lp53t4l4k4b", "ukpbj_ekinerja");
														if ($conn->connect_errno) {
															echo "Failed to connect to MySQL: " . $conn->connect_error;
														}
														
											$no = 1;
											$level=$_SESSION['level'];
											if ($level =='kasubag'){
											$res = $conn->query("SELECT * FROM tb_laporan order by id_laporan desc");
											
											}else{
											$res = $conn->query("SELECT * FROM tb_laporan where level='$level' order by id_laporan desc ");
											}
														
														while($row = $res->fetch_assoc()){
															?>
														
															<tr>
																	<td><?php echo $no ?></td>
																	<td><?php echo $row['tgl_input']?></td>
																	<td><?php echo $row['kegiatan']?></td>
																	<td><?php echo $row['uraian']?></td>
																	<?php 
																	if ($level =='helpdesk'){

																	}else{
																		?>
																	<td><?php echo $row['waktu']?></td>
																	<?php	
																	}
																	?>
																	
																	<?php
																	if ($row['status'] =='Y'){
																		?>
																		<td> 																		
																		<button type="button" data-id="'.$row['id_laporan'].'" class="btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Disetujui"><i class="glyphicon glyphicon-ok" ></i></button> 																	
																		</td>
																		<?php
																	}else{
																		?>
																		<td>
																		<button type="button" data-id="'.$row['id_laporan'].'" class="btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Belum Disetujui"><i class="glyphicon glyphicon-remove"></i></button>
																		</td>
																		<?php
																	}	
																	?>
																												
												<td>
															<div class="btn-group">
																<?php
																if($level =='kasubag'){
																	?>
																	<a href='laporan_hapusproses.php?id_laporan=<?php echo $row['id_laporan']; ?>'><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></button></a>
																	<a href='laporan_edit.php?id_laporan=<?php echo $row['id_laporan']; ?>'><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></button></a>
																	<?php
																}else{
																	?>												
																	<a href='laporan_hapusproses.php?id_laporan=<?php echo $row['id_laporan']; ?>'><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></button></a>
																	<a href='laporan_edit.php?id_laporan=<?php echo $row['id_laporan']; ?>'><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-edit"></i></button></a>
																<?php
																}
																?>															
																
															</div>
												</td>
															</tr>														
															<?php
															$no++;
														}													
											?>

											<!-- END DATA BEGIN -->
										</tbody>
										<tfoot>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Kegiatan Pokok</th>
											<th>Uraian Kerja</th>
											<?php
											$level=$_SESSION['level'];
											if ($level =='helpdesk'){
													echo '';
														}else{
													echo '<th>Waktu</th>';
														}
											?>
											<th>Status</th>
											<th>Action</th>
										</tr>
										</tfoot>
									</table>
									<!-- TABLE AKHIR -->
									<!-- MULAI MODAL -->
									
									<!-- status -->
									<div class="modal fade" id="status" role="dialog">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Status Laporan</h4>
												</div>
												<div class="modal-body">
													<p>This is a large modal.</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
								<!-- lihat -->
								<div class="modal fade" id="detail" role="dialog">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Detail Data Laporan</h4>
											</div>
											<div class="modal-body">
												<?php
												include 'koneksi.php';
												$id_laporan = $_POST['data-id'];
												$data = mysqli_query($koneksi,"select * from tb_laporan where data-id='$id_laporan'");
												while($d = mysqli_fetch_array($data)){
												?>
												<div class="form-group">
													<label>Tanggal</label>
													<div class="input-group date">
														<div class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</div>
														<input type="hidden" name="id_laporan" value="<?php echo $d['id_laporan']; ?>">
														<input disabled="disabled" name="tgl_input" value="<?php echo $d['tgl_input']; ?>" type="text" class="form-control pull-right" id="datepicker">
													</div>
													<!-- /.input group -->
												</div>
												<div class="form-group">
													<label for="pokok">Kegiatan Pokok</label><br>
													<select disabled="disabled" class="form-control select2" name="kegiatan">
														<option value=""> coba</option>'
														
													</select>
												</div>
												<div class="form-group">
													<label for="uraian">Uraian Kerja</label>
													<input disabled="disabled" type="text" class="form-control" id="uraian" name="uraian" placeholder="Rincian Kerja">
												</div>
												<div class="form-group">
													<label for="waktu">Waktu</label>
													<input disabled="disabled" type="text" class="form-control" id="waktu" name="waktu" placeholder="Durasi Waktu">
												</div>
												<div class="form-group">
													<label for="status">Status</label>
													<input disabled="disabled" type="text" class="form-control" id="status" name="status" placeholder="status laporan">
												</div>
												<?php
													}
												?>
												<!--  -->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
							
						</div>
						<!-- AKHIR MODAL -->
					</div>
					<!-- /.box-body -->
				</div>
			</section>

			 

			<!-----------------------MULAI KONTEN----------------------------->
			<!-- Main content -->
			<section class="content">
				<!-- ISI KONTEN -->
			</section>
			<!-- /.content -->
			<!-----------------------AKHIR KONTEN----------------------------->
		</div>
		<!-- /.content-wrapper -->
		<!-----------------------MULAI FOOTER----------------------------->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2019 <a href="http://lpse.tanahlautkab.go.id/eproc4" target="_blank">LPSE Kab. Tanah Laut</a>.</strong> All rights
			reserved.
		</footer>
		<!-----------------------AKHIR FOOTER----------------------------->
		<!-- Add the sidebar's background. This div must be placed
		immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
	<!--  -->

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id_laporan');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<script>
	$(document).ready( function () {
				$('#example')
					.addClass( 'nowrap' )
					.dataTable( {
						responsive: true,
          				scrollX: true,
					columnDefs: [
						{ 
              "targets": [0],
              "className": "text-center",
              "width": "1%"

            },
            {
              "targets": [1],
              "className": "text-center"
            }
					],					
					} );
			} );
	</script>
	<script language="JavaScript" src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
	<script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
	<script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" /> -->
	<!--  -->
</body>
</html>