<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN SISTEM-EKSKUL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<?php
require '../akses/conn.php';
?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
	<div class="panel-heading">

			<div class="logo-container" width="30%">
									<center >   <img width=40%" src="../akses/images/logo-smansa.png" class="img-fluid" alt="Logo Smansa"/></center>
								</div>



			<center><h4 class="panel-title">ADMIN SISTEM-EKSKUL</h4></center><?php if(isset($_GET['pesan'])){	if($_GET['pesan'] == "gagal"){		echo "Login gagal! username dan password salah!";	}else if($_GET['pesan'] == "logout"){		echo "Anda telah berhasil logout";	}else if($_GET['pesan'] == "belum_login"){		echo "Anda harus login untuk mengakses halaman admin";	}}?>

		</div>
      <br>
<form method="post" action="login_query.php">
  <!--    <form action="login_query" autocomplete="off"  method="POST"> -->
	  
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="myPassword" placeholder="Password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>

            </div>

          </div>
        </div>
		<input type="checkbox" onclick="myFunction()"> Lihat Password
		<br>
		<br>
		<script  type="text/javascript" >
			function myFunction() {
			var x = document.getElementById("myPassword");
			if (x.type === "password") {
			x.type = "text";
			} else {
			x.type = "password";
			}
			}
			</script>

        <div class="row">
		
       
          <!-- /.col -->
          <div class="btn btn-block btn-primary">
		   
            <button type="submit"  class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
	  <center class="nav-link text-black text-center" ><i class="far fa-copyright"></i>
            <strong> <a href="https://github.com/adithairun/sistem-ekskul" target="_blank"> 2021 SIS-EKSKUL</strong> <i>Versi <?php echo $versi?></i></a></center>
			
		<!--	<a class="nav-link text-black text-center" href="https://instagram.com/adithairun" target="_blank">Made </span>
			with <i class="fas fa-heart"></i> By</span> Aditya Hairun</a> -->
			 <a class="nav-link text-black text-center" href="http://adminlte.io" target="_blank">Template By AdminLTE.io</a>
    

      
    </div>




    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.min.js"></script>

</body>
</html>
