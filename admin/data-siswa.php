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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	
	<style>
		.table-responsive .table {
		max-width: none;
		style="overflow-x:scroll"
		}
		.text-white{

	white-space: normal;
}

	</style>
	
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
								<a href="data-siswa" class="nav-link active">
									<i class="far fa-circle nav-icon"></i>
									<p>Upload Data Siswa</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="api-token" class="nav-link">
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
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Data Siswa</h1>
						</div>

						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Data Siswa</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<!--- START IN LINE API -->



			<?php
				
				$query_api = mysqli_query($conn, "SELECT * FROM `api_sekolah`WHERE id_key=1") or die(mysqli_error());
				//$query = mysqli_query($conn, "SELECT * FROM student  ") or die(mysqli_error());
			//	$query = mysqli_query($conn, "SELECT * FROM student LEFT JOIN storage ON student.stud_no = storage.perbaiki UNION SELECT * FROM student RIGHT JOIN storage ON student.stud_no = storage.perbaiki  ") or die(mysqli_error($conn));
				while($fetch_api = mysqli_fetch_array($query_api)){
			?>


							<?php
$api_categories_list = $fetch_api['url_api'].'/sekolah/sekolah.php?key_api='.$fetch_api['key_api'].'&kode_menu=20';
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
	 
	
  
				
							
						   
							   
								
							   
		<td>'.$arr['menu'].'</td>
     
							
						   
						
							  
		';
	}
	
    echo "JIKA MENU DATA SISWA TIDAK TAMPIL, BERARTI API KEY SEKOLAH TIDAK VALID";
	

	?>








<!-- END IN LINE API -->








								<!-- UPDATE STATUS -->



								

























									</tbody>
									<tfoot>
										<tr>
											
										</tr>
									</tfoot>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
			</section>
			<!-- /.content -->
			<nav class="nav justify-content-center py-1 border-top bg-success">
            
            
            
            <a class="nav-link text-light text-center" href="https://github.com/adithairun/sekolah-api" target="_blank"><i class="far fa-copyright"></i>
            <strong>   2021 <?php echo $apk_name ?></strong> <i>Versi <?php echo $versi?></i></a>
            
            
    
            <a class="nav-link text-light text-center" href="https://instagram.com/adithairun" target="_blank">Made </span> with <span class="fa fa-heart text-white"> By</span> Aditya Hairun</a>
            <a class="nav-link text-light text-center" href="http://adminlte.io" target="_blank">Template By AdminLTE.io</a>
            
        </nav>
		</div>






		<!-- MODAL DLL -->

		<?php include '../akses/script.php'?>
		<div class="modal fade" id="modal_confirm" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered">

				<div class="modal-content">

					<div class="modal-header">

						<h3 class="modal-title">System</h3>

					</div>

					<div class="modal-body">

						<center>
							<h4 class="text-danger">Are you sure you want to logout?</h4>
						</center>

					</div>

					<div class="modal-footer">

						<a type="button" class="btn btn-success" data-dismiss="modal">Cancel</a>

						<a href="logout.php" class="btn btn-danger">Logout</a>

					</div>

				</div>

			</div>

		</div>

		<div class="modal fade" id="modal_remove" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered">

				<div class="modal-content">

					<div class="modal-header">

						<h3 class="modal-title">System</h3>

					</div>

					<div class="modal-body">

						<center>
							<h4 class="text-danger">Are you sure you want to remove this file?</h4>
						</center>

					</div>

					<div class="modal-footer">

						<a type="button" class="btn btn-success" data-dismiss="modal">No</a>

						<button type="button" class="btn btn-danger" id="btn_yess">Yes</button>

					</div>

				</div>

			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function () {

				$('.btn_remove').on('click', function () {

					var store_id = $(this).attr('id');

					$("#modal_remove").modal('show');

					$('#btn_yess').attr('name', store_id);

				});



				$('#btn_yess').on('click', function () {

					var id = $(this).attr('name');

					$.ajax({

						type: "POST",

						url: "remove_file.php",

						data: {

							store_id: id

						},

						success: function (data) {

							$("#modal_remove").modal('hide');

							$(".del_file" + id).empty();

							$(".del_file" + id).html(
								"<td colspan='4'><center class='text-danger'>Deleting...</center></td>"
							);

							setTimeout(function () {

								$(".del_file" + id).fadeOut('slow');

							}, 1000);



						}

					});

				});

			});
		</script>





														<?php
		 require_once '../akses/conn.php';
		$query1 = "SELECT * FROM ekskul";
		$result = mysqli_query($conn, $query1);


		?>
														<div class="modal fade" id="form_modal" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered">
																<div class="modal-content">

																	<form autocomplete="off" method="POST"
																		action="save_ekskul.php">
																		<div class="modal-header">
																			<h4 class="modal-title">Tambah Akun Pembina</h4>
																		</div>
																		<div class="modal-body">
																			<div class="col-md-3"></div>
																			<div class="col-md-6">

																			<div class="form-group">

																					<label>Nama Ekskul </label>

																					<input type="text" id="nama_ekskul" name="nama_ekskul"
																						class="form-control"
																						required="required" />
																						<div id="result"></div>
																				</div>

																				<div class="form-group">
																					<label>Pembina Ekskul</label>
																					<input type="text" name="pembina_ekskul"
																						class="form-control"
																						required="required" />
																				</div>




																			</div>
																		</div>
																		<div style="clear:both;"></div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-danger"
																				data-dismiss="modal"><span
																					class="glyphicon glyphicon-remove"></span>
																				Tutup</button>
																			<button name="save" class="btn btn-primary"><span
																					class="fas fa-plus-circle"></span>
																				Tambah</button>
																		</div>
																	</form>
																</div>
															</div>














		<script type="text/javascript">
			$(document).ready(function () {

				$('.btn-delete').on('click', function () {

					var stud_id = $(this).attr('id');

					$("#modal_confirm").modal('show');

					$('#btn_yes').attr('name', stud_id);

				});

				$('#btn_yes').on('click', function () {

					var id = $(this).attr('name');

					$.ajax({

						type: "POST",

						url: "delete_pengguna.php",

						data: {

							stud_id: id

						},

						success: function () {

							$("#modal_confirm").modal('hide');

							$(".del_student" + id).empty();

							$(".del_student" + id).html(
								"<td colspan='6'><center class='text-danger'>Deleting...</center></td>"
							);

							setTimeout(function () {

								$(".del_student" + id).fadeOut('slow');

							}, 1000);

						}

					});

				});

			});
		</script>








		<!-- AKHIR MODAL DLL-->











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

