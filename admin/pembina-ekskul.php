<?php session_start();	if($_SESSION['status']!="login"){		header("location:login?pesan=belum_login");	}	require_once '../akses/conn.php'?><!DOCTYPE html>
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
					<center>SIS-EKSKUL</center>
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


						<li class="nav-item has-treeview menu-open">
							<a href="#" class="nav-link active">
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
									<a href="pembina-ekskul" class="nav-link active">
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
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Data Akun Pembina</h1>
						</div>

						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Data Akun Pembina</li>
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

							<!-- /.card-header -->

							<!-- DATA TABLE UNTUK TES -->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Data Akun Pembina Ekstrakurikuler</h3>
									<form method="post" enctype="multipart/form-data" action="backend/upload_pembina">
										<br>
										Pilih File: <br>

										<input name="filepegawai" type="file" required="required"> <br><br>

										<b>Petunjuk</b><br>

										<a style="color:black">*Download Template file excel <a
												href="file/template-pembina.xls">Download</a><br><br>




											<button class="btn btn-primary" name="upload" type="submit"><span
													class="ion-upload"></span> Upload File</button>
											<h5 style="color:black">Silahkan Cek ID Ekskul Di Bawah ini</h5>

									</form>

								</div>
								<!-- /.card-header -->

								<div class="card-body">
									<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
										aria-pressed="true">Cek ID Ekskul</button>
									<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span
											class="fas fa-plus-circle"></span> Tambah Akun Pembina</button>
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>NO</th>
												<th>AKSI</th>


												<th>NAMA EKSKUL</th>
												<th>USERNAME</th>
												<th>PASSWORD</th>
												<th>LOGO EKSKUL</th>



											</tr>
										</thead>
										<tbody>
											<?php

				$no=1;

					//$query = mysqli_query($conn, "SELECT * FROM storage ORDER BY perbaiki ASC") or die(mysqli_error());

					$query = mysqli_query($conn, "SELECT * FROM pembina NATURAL JOIN ekskul ORDER BY nama_ekskul") or die(mysqli_error());



							while($fetch = mysqli_fetch_array($query)){

				?>

											<tr class="del_student<?php echo $fetch['stud_id']?>">

												<th><?php echo $no++; ?></th>

												<td>
													<center>

														<button class="btn btn-success" data-toggle="modal"
															data-target="#edit_modal<?php echo $fetch['pembina_id']?>"><span
																class="ion-compose"></span> Edit</button>

														<a href="backend/hapus_pembina.php?pembina_id=<?php echo $fetch['pembina_id'];?>"
															onclick="return confirm('Pengguna Akan Dihapus, Lanjutkan ?')"><button
																class="btn btn-warning"> <span
																	class="ion-trash-a"></span> Hapus Akun</button></a>



														<!--						 <button class="btn btn-success btn-lg active" role="button" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Bantuan</button> -->

														<div class="modal-footer">







														</div>

												</td>



												<td><?php echo $fetch['nama_ekskul']?></td>
												<td><?php echo $fetch['username_pembina']?></td>
												<td><?php echo $fetch['password_pembina']?></td>
												<th> 							<?php
													if ($fetch['foto_pembina']!=''){
													  echo "<img src=\"../gambar/$fetch[pembina_id]/$fetch[foto_pembina]\" height=100 />";
													}
													else{
													  echo "<img src=\"../gambar/tes.png\" height=100>";
													} ?>
												</th>





												<?php

 if(isset($_GET['format'])){

	 echo "Data berhasil di format.</p>";

 }

 ?>

												<!-- DISBALE PERINGATAN DATABLE -->

												<script type="text/javascript">
													window.alert = (function () {

														var nativeAlert = window.alert;

														return function (message) {

															window.alert = nativeAlert;

															message.indexOf("DataTables warning") === 0 ?

																console.warn(message) :

																nativeAlert(message);

														}

													})();
												</script>



												<?php
 require_once '../akses/conn.php';
$query1 = "SELECT * FROM ekskul";
$result = mysqli_query($conn, $query1);


?>



												<div class="modal fade" id="edit_modal<?php echo $fetch['pembina_id']?>"
													aria-hidden="true">

													<div class="modal-dialog modal-dialog-centered">

														<div class="modal-content">

															<form autocomplete="off" method="POST"
																action="backend/update_pembina.php">

																<div class="modal-header">

																	<h4 class="modal-title">Ubah Akun Pembina</h4>

																</div>

																<div class="modal-body">

																	<div class="col-md-3"></div>

																	<div class="col-md-6">

																		<div class="form-group">



																			<input type="hidden" name="pembina_id"
																				value="<?php echo $fetch['pembina_id']?>"
																				class="form-control" />



																		</div>


																		<div class="form-group">

																			<label>Pilih Akun Ekstrakurikuler</label>
																			<select name="ekskul_id"
																				class="form-control"
																				required="required">

																				<option value="">Pilih Akun Ekskul
																				</option>
																				<?php


		while($data = mysqli_fetch_assoc($result) ){?>

																				<option
																					value="<?php echo $data['ekskul_id']; ?>">
																					<?php echo $data['nama_ekskul']; ?>
																				</option>

																				<?php } ?>
																			</select>

																		</div>


																		<div class="form-group">

																			<label>Username</label>

																			<input type="text" id="username_pembina1"
																				name="username_pembina"
																				class="form-control"
																				value="<?php echo $fetch['username_pembina']?>"
																				required="required" />
																			<div id="result1"></div>
																		</div>

																		<div class="form-group">

																			<label>Password</label>

																			<input type="text" name="password_pembina"
																				class="form-control"
																				value="<?php echo $fetch['password_pembina']?>"
																				required="required" />

																		</div>

																		<input type="hidden" name="foto_pembina"
																				class="form-control"
																				value="<?php echo $fetch['foto_pembina']?>"
																				required="required" />





																	</div>

																</div>

																<div style="clear:both;"></div>

																<div class="modal-footer">

																	<button type="button" class="btn btn-danger"
																		data-dismiss="modal"><span
																			class="glyphicon glyphicon-remove"></span>
																		Tutup</button>

																	<button name="update" class="btn btn-warning"><span
																			class="glyphicon glyphicon-save"></span>
																		Ubah</button>

																</div>

															</form>

														</div>

													</div>

												</div>


												<script type="text/javascript">
													$(document).ready(function () {
														$('#username_pembina1').keyup(function () {
															var uname = $('#username_pembina1').val();
															if (uname == 0) {
																$('#result1').text('');
															} else {
																$.ajax({
																	url: 'backend/cek_pembina1.php',
																	type: 'POST',
																	data: 'username_pembina1=' + uname,
																	success: function (hasil) {
																		if (hasil > 0) {
																			$('#result1').text(
																				'Username Sudah Ada, atau sama dengan username yang lama'
																				);
																		} else {
																			$('#result1').text('Username Tersedia');
																		}
																	}
																});
															}
														});
													});
												</script>


													<?php

					}

				?>

										</tbody>

									</table>

								</div>


								<script type="text/javascript">
									$(document).ready(function () {
										$('#username_pembina').keyup(function () {
											var uname = $('#username_pembina').val();
											if (uname == 0) {
												$('#result').text('');
											} else {
												$.ajax({
													url: 'backend/cek_pembina.php',
													type: 'POST',
													data: 'username_pembina=' + uname,
													success: function (hasil) {
														if (hasil > 0) {
															$('#result').text('Username Sudah Ada, silahkan ganti');
														} else {
															$('#result').text('Username Tersedia');
														}
													}
												});
											}
										});
									});
								</script>






								<div class="modal fade" id="modal_confirm" aria-hidden="true">

									<div class="modal-dialog modal-dialog-centered">

										<div class="modal-content">

											<div class="modal-header">

												<h3 class="modal-title">Hapus Data Pengguna</h3>

											</div>

											<div class="modal-body">

												<center>
													<h4 class="text-danger">Hanya bisa menghapus pengguna yang telah
														mengupload, File yang pengguna upload akan terhapus.</h4>
												</center>

												<center>
													<h3 class="text-danger">Lanjutkan ?</h3>
												</center>

											</div>

											<div class="modal-footer">

												<button type="button" class="btn btn-danger"
													data-dismiss="modal">Tidak</button>

												<button type="button" class="btn btn-success" id="btn_yes">Ya</button>

											</div>

										</div>

									</div>

								</div>











								<!-- UPDATE STATUS -->



								<!-- Modal -->

								<div class="modal fade" id="exampleModal<?php echo $fetch['stud_id']?>" tabindex="-1"
									role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

									<div class="modal-dialog">

										<div class="modal-content">


											<div class="modal-body">





												<div class="form-group">

													<table id="example1" class="table table-striped">
														<thead>
															<tr>


																<th>NAMA EKSKUL</th>

																<th>ID EKSKUL</th>
															</tr>
														</thead>
														<tbody>

															<?php

									$no=1;

										//$query = mysqli_query($conn, "SELECT * FROM storage ORDER BY perbaiki ASC") or die(mysqli_error());

										$query = mysqli_query($conn, "SELECT * FROM ekskul") or die(mysqli_error());



												while($fetch = mysqli_fetch_array($query)){

									?>






															<td><?php echo $fetch['nama_ekskul']?></td>
															<td><?php echo $fetch['ekskul_id']?></td>



														</tbody>




												</div>

											</div>

											<div style="clear:both;"></div>

											<div class="modal-footer">





											</div>

										</div>

									</div>


									<!-- AKHIR UPDATE STATUS -->


									<?php

								}

								?>



									</table>

									<div class="modal-footer">

										<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>



									</div>





















									</tbody>

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
            
            
            
            <a class="nav-link text-light text-center" href="https://github.com/adithairun/sistem-ekskul" target="_blank"><i class="far fa-copyright"></i>
            <strong>   2021 SIS-EKSKUL</strong> <i>Versi <?php echo $versi?></i></a>
            
            
    
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




		<?php
require_once '../akses/conn.php';
$query1 = "SELECT * FROM ekskul";
$result = mysqli_query($conn, $query1);


?>
		<div class="modal fade" id="form_modal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form autocomplete="off" method="POST"
						action="backend/save_pembina.php">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Akun Pembina</h4>
						</div>
						<div class="modal-body">
							<div class="col-md-3"></div>
							<div class="col-md-6">


								<div class="form-group">
									<label>Pilih Akun Ekstrakurikuler</label>
									<select name="ekskul_id"
										class="form-control"
										required="required">
										<option value="">Pilih Akun Ekskul
										</option>
										<?php


while($data = mysqli_fetch_assoc($result) ){?>

										<option
											value="<?php echo $data['ekskul_id']; ?>">
											<?php echo $data['nama_ekskul']; ?>
										</option>

										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" id="username_pembina"
										name="username_pembina"
										class="form-control"
										required="required" />
									<div id="result"></div>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="text" name="password_pembina"
										class="form-control"
										required="required" />
								</div>

								<input type="hidden" name="foto_pembina"
								value=""
									required="required" />



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
								Simpan</button>
						</div>
					</form>

				</div>
				
			</div>



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
