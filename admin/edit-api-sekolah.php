<?php session_start();	if($_SESSION['status']!="login"){		header("location:login?pesan=belum_login");	}	require_once '../akses/conn.php'?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIS-EKSKUL</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../asset/plugins/jquery/jquery.min.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">










<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

      <span class="brand-text font-weight-light"><center><?php echo $apk_name ?></center></span>
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

          


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          
				<li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <li class="navbar">
      <a href="../keluar.php" class="fas fa-arrow-alt-circle-left">

        Keluar
      </a>
    </li>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit API KEY</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Data Token</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
			  		  
			  <?php 
	include '../akses/conn.php';
	$id_key = $_GET['id_key'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM api_sekolah WHERE id_key='$id_key'")or die(mysql_error());
	
	while($data = mysqli_fetch_array($query_mysql)){
	?>
			  



			  <form  onsubmit="return validation()" autocomplete="off" action="backend/update_api_sekolah.php" method="post">	
			  <div class="card-body table-responsive p-0">
              <table  class="table table-hover text-wrap">
               <tr>
				<td>API KEY</td>
				<td>
					<input type="hidden" name="id_key" value="<?php echo $data['id_key'] ?>">
					<input type="text" name="key_api" value="<?php echo $data['key_api'] ?>">
          
					
				</td>					
			</tr>	
      <tr>
				<td>URL API KEY</td>
				<td>
        <input type="text" name="url_api" value="<?php echo $data['url_api'] ?>">
      
				</td>					
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary btn-align " type="submit" value="Simpan">
				</td>					
			</tr>
		  
              </table>
			  </div>
			  </form>
			  <!--
			  <button class="btn-danger" id="button" onclick="getElementById('api_key').value=randomStr(60, 'QWERTYUIOPASDFGHJKLZXCVBNM');">Acak Token</button></td>
		 -->
			  			
<script> 
        var up = document.getElementById('GFG_UP'); 
        var down = document.getElementById('api_key'); 
        up.innerHTML =  
          'Click on the button to generate alpha-numeric string'; 
  
        function randomStr(len, arr) { 
            var ans = ''; 
            for (var i = len; i > 0; i--) { 
                ans +=  
                  arr[Math.floor(Math.random() * arr.length)]; 
            } 
            return ans; 
        } 
  
        function GFG_Fun() { 
            down.innerHTML = randomStr(60, 'ABCDE'); 
        } 
    </script>
	<?php } ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
<script type="text/javascript">



</script>
<!-- Jangan menghapus atau mengubah bagian footer, tolong hargailah pengembang awal -->
  <footer class="main-footer">
    <strong> &copy; 2020 <a href="http://instagram.com/adithairun">Adit Hairun</a> All rights reserved. | Template By <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>v</b>1.2
    </div>
  </footer>
  <!-- Jangan menghapus atau mengubah bagian footer, tolong hargailah pengembang awal -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


		<!-- /.content-wrapper -->
		

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="../asset/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="../asset/plugins/datatables/jquery.dataTables.min.js"></script>

	<script src="../asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../asset/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../asset/dist/js/demo.js"></script>
	<!-- page script -->
	<script>
		$(function () {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>
</body>
</html>