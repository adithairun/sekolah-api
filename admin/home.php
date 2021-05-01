<?php session_start();	if($_SESSION['status']!="login"){		header("location:login?pesan=belum_login");	}	require_once '../akses/conn.php'?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIS-EKSKUL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../asset/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



  <script src="../asset/plugins/chart.js/Chart.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

      <span class="brand-text font-weight-light"><center>SIS-EKSKUL</center></span>
    </a>
	<?php
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
			?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
		<br>
        <div class="text-white bg-dark">   &nbsp;
         	 <?php
							echo $fetch['firstname']." ".$fetch['lastname'];
						?>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manajemen Akun</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

							<li class="nav-item">
								<a href="data-ekskul" class="nav-link  ">
									<i class="far fa-circle nav-icon"></i>
									<p>Data Ekskul</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="pembina-ekskul" class="nav-link ">
									<i class="far fa-circle nav-icon"></i>
									<p>Akun Pembina Ekskul</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="anggota-ekskul" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Data Anggota Ekskul</p>
								</a>
							</li>

            </ul>
          </li>
					<li class="nav-item has-treeview">
						<a href="ttd-siswa" class="nav-link">

							<i class="fas fa-file-contract"></i>
							<p>
							TTD Siswa

							</p>
						</a>

					</li>
					<li class="nav-item has-treeview">
	 							<a href="dokumentasi" class="nav-link">

	 								<i class="far fa-image"></i>
	 								<p>
	 								Dokumentasi Kegiatan

	 								</p>
	 							</a>

	 						</li>




          <li class="navbar">
      <a href="logout" class="fas fa-arrow-alt-circle-left">

        Keluar
      </a>
    </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                		  <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from ekskul");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Jumlah Ekstrakurikuler</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="data-ekskul" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from student");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Jumlah Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="anggota-ekskul" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>


          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from pembina");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Jumlah Akun Pembina</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="pembina-ekskul" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from user ");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Jumlah Akun Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
		     

		  <div class="col-lg-3 col-6">
            <!-- small box -->



          </div>

          <!-- ./col -->

          <!-- ./col -->
        </div>
        <!-- /.row -->
       <!-- Edit DISINI -->


	<!--	<center><h2 class="m-0 text-dark">Grafik Verval Siswa</h2></center> -->

		<div style="width: 100%;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Siswa Ajukan Verval", "Belum Dikonfirmasi", "Sementara Proses", "Berhasil Diperbarui"],
				datasets: [{
					label: '',
					data: [

					<?php

					$grafik_verval = mysqli_query($conn,"select * from storage ");
					echo mysqli_num_rows($grafik_verval);
					?>,
					<?php

					$grafik_verval = mysqli_query($conn,"select * from storage where absen='D'");
					echo mysqli_num_rows($grafik_verval);
					?>,
					<?php

					$grafik_verval = mysqli_query($conn,"select * from storage where status='Sementara Proses'");
					echo mysqli_num_rows($grafik_verval);
					?>,
					<?php

					$grafik_verval = mysqli_query($conn,"select * from storage where status='Berhasil Diperbarui'");
					echo mysqli_num_rows($grafik_verval);
					?>,


					],
					backgroundColor: [
					'rgba(0, 140, 255, 1)',
					'rgba(240, 52, 52, 1)',
					'rgba(245, 229, 27, 1)',
					'rgba(0, 192, 67, 1)'


					],
					borderColor: [
					'rgba(0, 140, 255, 1)',
					'rgba(240, 52, 52, 1)',
					'rgba(245, 229, 27, 1)',
					'rgba(0, 192, 67, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


			  <!-- Edit DISINI -->


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <nav class="nav justify-content-center py-1 border-top bg-success">
            
            
            
            <a class="nav-link text-light text-center" href="https://github.com/adithairun/sistem-ekskul" target="_blank"><i class="far fa-copyright"></i>
            <strong>   2021 SIS-EKSKUL</strong> <i>Versi <?php echo $versi?></i></a>
            
            
    
            <a class="nav-link text-light text-center" href="https://instagram.com/adithairun" target="_blank">Made </span> with <span class="fa fa-heart text-white"> By</span> Aditya Hairun</a>
            <a class="nav-link text-light text-center" href="http://adminlte.io" target="_blank">Template By AdminLTE.io</a>
            
        </nav>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../asset/plugins/moment/moment.min.js"></script>
<script src="../asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../asset/dist/js/demo.js"></script>
</body>
</html>
