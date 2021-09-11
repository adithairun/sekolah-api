<?php session_start();	if($_SESSION['status']!="login"){		header("location:login?pesan=belum_login");	}	require_once '../akses/conn.php'?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $apk_name ?></title>
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
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-link">Home</a>
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

				<span class="brand-text font-weight-light">
					<center><?php echo $apk_name ?></center>
				</span>
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
					<div class="text-white bg-dark"> &nbsp;
						<?php
							echo $fetch['firstname']." ".$fetch['lastname'];
						?>
					</div>

				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item has-treeview">
							<a href="home" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Dashboard

								</p>
							</a>

						</li>
						<li class="nav-item has-treeview">
            <a href="api-key" class="nav-link">
              <i class="fas fa-cogs"></i>
              <p>
               API KEY SEKOLAH
                
              </p>
            </a>
           
          </li>

						<li class="nav-item has-treeview">
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


						<li class="nav-item has-treeview  menu-open ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

							<li class="nav-item">
								<a href="data/" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Data Siswa</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="data-siswa" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Upload Data Siswa</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="api-token" class="nav-link active">
									<i class="far fa-circle nav-icon"></i>
									<p>Data API KEY</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="password-tampil" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Password Tampil Data</p>
								</a>
							</li>

            </ul>
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
			

			
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>API KEY</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../home">Home</a></li>
              <li class="breadcrumb-item active">API KEY</li>
            </ol>
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
              <h3 class="card-title">API KEY</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
			 
	<?php
		
		$no=1;
		
			?>
		<!--- START IN LINE API -->



		<?php
				
				$query_api = mysqli_query($conn, "SELECT * FROM `api_sekolah`WHERE id_key=1") or die(mysqli_error());
				//$query = mysqli_query($conn, "SELECT * FROM student  ") or die(mysqli_error());
			//	$query = mysqli_query($conn, "SELECT * FROM student LEFT JOIN storage ON student.stud_no = storage.perbaiki UNION SELECT * FROM student RIGHT JOIN storage ON student.stud_no = storage.perbaiki  ") or die(mysqli_error($conn));
				while($fetch_api = mysqli_fetch_array($query_api)){
			?>


							<?php
$api_categories_list = $fetch_api['url_api'].'/sekolah/sekolah.php?key_api='.$fetch_api['key_api'].'&kode_menu=30';
$json_list = @file_get_contents($api_categories_list);
?>
<?php

}
		?>
											<?php
											
	$array = json_decode($json_list, true);
	$result = isset($array['result']) ? $array['result'] : array();
  
  
	foreach($result as $arr) {
		
		
	   
		echo '
	 
	
  
				
							
						   
							   
								
							   
		'.$arr['menu'].'
     
							
						   
						
							  
		';
	}
	
    echo "";
	

	?>

			<?php
		include '../akses/conn.php';
		$no=1;
		$data = mysqli_query($conn,"select * from token ORDER BY id ASC");
		while($row = mysqli_fetch_array($data)){
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				
				<td><?php echo $row['ket']; ?></td> 
				<td><?php echo $row['api_key']; ?></td> 
				<td><a href="edit.php?id=<?php echo $row['id'];?>" title="edit data"><button class="btn btn-primary"><span class="ion-compose"></span>  Edit</button>
				
				</a>
				<a href="backend/hapus_api?id=<?php echo $row['id'];?>" onclick="return confirm('API KEY Akan Dihapus')"><button class="btn btn-danger"><span class="ion-trash-a"></span> Hapus</button></a></td>
			</tr>
			<?php
			}
			?>

		</tbody>
		</table>
		<b>JIKA MENU API KEY ACAK-ACAKAN BERARTI API KEY SEKOLAH TIDAK VALID</b>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
			</section>
			<!-- /.content -->
			












		<!-- AKHIR MODAL DLL-->



   







<!-- END IN LINE API -->











		<!-- /.content-wrapper -->
		<nav class="nav justify-content-center py-1 border-top bg-success">
            
            
            
            <a class="nav-link text-light text-center" href="https://github.com/adithairun/sistem-ekskul" target="_blank"><i class="far fa-copyright"></i>
            <strong>   2021 <?php echo $apk_name ?></strong> <i>Versi <?php echo $versi?></i></a>
            
            
    
            <a class="nav-link text-light text-center" href="https://instagram.com/adithairun" target="_blank">Made </span> with <span class="fa fa-heart text-white"> By</span> Aditya Hairun</a>
            <a class="nav-link text-light text-center" href="http://adminlte.io" target="_blank">Template By AdminLTE.io</a>
            
        </nav>
		</div>

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
