<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Kinerja | LPSE Kab. Tanah Laut</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <img src="images/lpse.png" alt="Logo Tala" width="200" class="center">
    <a href="index.php"><br>LPSE Kab. Tanah Laut<br><b>Aplikasi e-Kinerja</b><br></a>
  </div>
    <!-- /.login-logo -->
  <div class="login-box-body">
    <p style="margin: 0;
  text-align: center;
  padding: 0 10px 10px 10px; font-size:25px; color:#3C8DBC ">Login</p>

   <!------------------------------------------- MULAI FORM ---------------------------------------->

    <form action="cek_login.php" method="post">

    <!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
      // echo "Login gagal! username dan password salah!";
      echo "<div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Login gagal!</strong> username dan password salah!
      </div>";
		}else if($_GET['pesan'] == "logout"){
      // echo "Anda telah berhasil logout";
      echo "<div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Hai,</strong> Anda telah berhasil logout.
      </div>";
		}else if($_GET['pesan'] == "belum_login"){
      // echo "Anda harus login untuk mengakses halaman admin";
      echo "<div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <strong>Gagal!</strong> Anda harus login untuk mengakses halaman admin!
      </div>";
		}
	}
	?>

      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   <!------------------------------------------- AKHIR FORM ---------------------------------------->

   <!------------------------------------------- MULAI FOOTER ---------------------------------------->

    <!-- /.social-auth-links -->
    <hr>
    <div style="text-align:center;"><a href="index.php">e-Kinerja 1.0</a><br>
    <a href="register.html" class="text-center"><strong>Copyright &copy; 2019 <a href="http://lpse.tanahlautkab.go.id/eproc4" target="_blank">LPSE Kab. Tanah Laut</a>.</strong><br>All rights
    reserved.</a>
    </div>
    <!------------------------------------------- AKHIR FOOTER ---------------------------------------->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
