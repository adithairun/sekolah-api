<?php session_start();	if($_SESSION['status']!="login"){		header("location:login?pesan=belum_login");	}	require_once '../akses/conn.php'?><!DOCTYPE html>
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
							 <li class="nav-item has-treeview">
			 					<a href="home" class="nav-link">
			 						<i class="nav-icon fas fa-th"></i>
			 						<p>
			 							Dashboard

			 						</p>
			 					</a>

			 				</li>

			 				<li class="nav-item has-treeview  menu-open">
			 					<a href="#" class="nav-link  active">
			 						<i class="nav-icon fas fa-users"></i>
			 						<p>
			 							Admin
			 							<i class="right fas fa-angle-left"></i>
			 						</p>
			 					</a>
			 					<ul class="nav nav-treeview">
			 						<li class="nav-item">
			 							<a href="user" class="nav-link active">
			 								<i class="far fa-circle nav-icon"></i>
			 								<p>Manajemen Akun</p>
			 							</a>
			 						</li>

			 					</ul>
			 				</li>


			 				<li class="nav-item has-treeview">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Data Admin</li>
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
              <h3 class="card-title">Data Admin</h3>


            </div>
            <!-- /.card-header -->

            <div class="card-body">
			<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="ion-plus"></span> Tambah Admin</button>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<tr>
					<th>Username</th>
					<th>Aksi</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Password</th>
					<th>Status</th>

				</tr>

                </tr>
                </thead>
                <tbody>
                <?php
					$query = mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<?php
					if($fetch['status'] != "administrator" || $_SESSION['status'] == $fetch['status']){
				?>
					<tr class="del_user<?php echo $fetch['user_id']?>">
					<td><?php echo $fetch['username']?></td>
					<td><center><button class="btn btn-warning" data-toggle="modal" data-target="#edit_modal<?php echo $fetch['user_id']?>"><span class="ion-gear-b"></span> Edit</button>
						<?php
							if($fetch['status'] != "administrator, Regular"){
						?>
							| <button class="btn btn-danger btn-delete" id="<?php echo $fetch['user_id']?>" type="button"><span class="ion-trash-a"></span> Hapus</button></center></td>
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>

						<td>********</td>
						<td><?php echo $fetch['status']?></td>

						<?php
							}
						?>
					</tr>
						<?php
							}
						?>




			<div class="modal fade" id="edit_modal<?php echo $fetch['user_id']?>" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form method="POST" action="update_user.php">
									<div class="modal-header">
										<h4 class="modal-title">Update User</h4>
									</div>
									<div class="modal-body">
										<div class="col-md-3"></div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Firstname</label>
												<input type="hidden" name="user_id" value="<?php echo $fetch['user_id']?>"/>
												<input type="text" name="firstname" value="<?php echo $fetch['firstname']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Lastname</label>
												<input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Username</label>
												<input type="text" name="username" value="<?php echo $fetch['username']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="password" name="password" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Status</label>
												<?php
													if($fetch['status'] != "administrator"){
												?>
													<input type="text" name="status" value="Regular" class="form-control" readonly="readonly" required="required"/>
												<?php
													}else{
												?>
													<input type="text" name="status" value="administrator" class="form-control" readonly="readonly" required="required"/>
												<?php
													}
												?>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
										<button name="edit" class="btn btn-warning" ><span class="glyphicon glyphicon-save"></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>





	</div>
	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Sistem</h3>
				</div>
				<div class="modal-body">

					<center><h4 class="text-danger">Lanjutkan Menghapus ?</h4></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-success" id="btn_yes">Ya</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="save_user.php">
					<div class="modal-header">
						<h4 class="modal-title">Add User</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required="required"/>
							</div>
									<div class="form-group">

								<label>Level</label>

								<select name="status" class="form-control" required="required">

									<option value="">Level</option>

									<option value="administrator">Admin</option>

									<option value="Regular">Reguler</option>

								</select>

							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-success" ><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
				<?php

					}

				?>

			</tbody>

		</table>

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

				<center><h4 class="text-danger">Are you sure you want to logout?</h4></center>

			</div>

			<div class="modal-footer">

				<a type="button" class="btn btn-success" data-dismiss="modal">Cancel</a>

				<a href="logout.php" class="btn btn-danger">Logout</a>

			</div>

		</div>

	</div>

</div>






  <!-- AKHIR MODAL DLL-->








  <?php include '../akses/script.php'?>
<script type="text/javascript">
$(document).ready(function(){
	$('.btn-delete').on('click', function(){
		var user_id = $(this).attr('id');
		$("#modal_confirm").modal('show');
		$('#btn_yes').attr('name', user_id);
	});
	$('#btn_yes').on('click', function(){
		var id = $(this).attr('name');
		$.ajax({
			type: "POST",
			url: "delete_user.php",
			data:{
				user_id: id
			},
			success: function(){
				$("#modal_confirm").modal('hide');
				$(".del_user" + id).empty();
				$(".del_user" + id).html("<td colspan='6'><center class='text-danger'>Deleting...</center></td>");
				setTimeout(function(){
					$(".del_user" + id).fadeOut('slow');
				}, 1000);
			}
		});
	});
});
</script>


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
