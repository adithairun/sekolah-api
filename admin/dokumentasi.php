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
							 <li class="nav-item has-treeview">
	 	            <a href="home.php" class="nav-link">
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
							
							<li class="nav-item has-treeview  menu-open">
	 							<a href="dokumentasi" class="nav-link active">

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
            <h1>Dokumentasi Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Dokumentasi Kegiatan</li>
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
              <h3 class="card-title">Dokumentasi Kegiatan</h3>


            </div>
            <!-- /.card-header -->

            <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr>
									<center>
          <th>No</th>
				<th>Aksi</th>
					<th>Nama Pembina</th>
					<th>Nama Ekskul</th>
					<th>Waktu Kegiatan</th>
					<th>Keterangan</th>
					<th>Dokumentasi</th>
	</center>
					<?php

				$no=1;
					$query = mysqli_query($conn, "select * from storage NATURAL JOIN pembina NATURAL JOIN ekskul") or die(mysqli_error());
					//$query = mysqli_query($conn, "SELECT * FROM student  ") or die(mysqli_error());
				//	$query = mysqli_query($conn, "SELECT * FROM student LEFT JOIN storage ON student.stud_no = storage.perbaiki UNION SELECT * FROM student RIGHT JOIN storage ON student.stud_no = storage.perbaiki  ") or die(mysqli_error($conn));

				?>


                </tr>
                </thead>
                <tbody>

				<?php

     $no = 1;

     while ($fetch = $query->fetch_assoc()) {
     ?>
					<tr class="del_student<?php echo $fetch['store_id']?>">
						<th><?php echo $no++; ?></th>
					<td><center>

					
								 														<a href="backend/remove_file?store_id=<?php echo $fetch['store_id'];?>"
								 															onclick="return confirm('Dokumentasi Akan Dihapus, Lanjutkan ?')"><button
								 																class="btn btn-warning"> <span
								 																	class="ion-trash-a"></span> Hapus Dokumentasi</button></a> 
</td>
						 <td><?php echo $fetch['pembina_ekskul']?></td>
						 <td><?php echo $fetch['nama_ekskul']?></td>
						 <td><?php echo $fetch['tanggal_kegiatan']?></td>
						 <td><?php echo $fetch['rincian_kegiatan']?></td>
						 <td>
						 							<?php
													if ($fetch['filename']!=''){
													  echo "<img src=\"../files/$fetch[pembina_id]/$fetch[filename]\" height=100 />";
													}
													?>
												
						 </td>






								<?php

													}

												?>


					</tr>
<!-- DISBALE PERINGATAN DATABLE -->

					<script type="text/javascript">



					window.alert = (function() {

	    var nativeAlert = window.alert;

	    return function(message) {

	        window.alert = nativeAlert;

	        message.indexOf("DataTables warning") === 0 ?

	            console.warn(message) :

	            nativeAlert(message);

	    }

	})();



					</script>









			</tbody>

		</table>

	</div>



















	<!-- UPDATE STATUS -->



	<!-- Modal -->


            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>






  <!-- MODAL DLL -->




<script type="text/javascript">

$(document).ready(function(){

	$('.btn_remove').on('click', function(){

		var store_id = $(this).attr('id');

		$("#modal_remove").modal('show');

		$('#btn_yess').attr('name', store_id);

	});



	$('#btn_yess').on('click', function(){

		var id = $(this).attr('name');

		$.ajax({

			type: "POST",

			url: "remove_file.php",

			data:{

				store_id: id

			},

			success: function(data){

				$("#modal_remove").modal('hide');

				$(".del_file" + id).empty();

				$(".del_file" + id).html("<td colspan='4'><center class='text-danger'>Deleting...</center></td>");

				setTimeout(function(){

					$(".del_file" + id).fadeOut('slow');

				}, 1000);



			}

		});

	});

});

</script>


















<script type="text/javascript">

$(document).ready(function(){

	$('.btn-delete').on('click', function(){

		var stud_id = $(this).attr('id');

		$("#modal_confirm").modal('show');

		$('#btn_yes').attr('name', stud_id);

	});

	$('#btn_yes').on('click', function(){

		var id = $(this).attr('name');

		$.ajax({

			type: "POST",

			url: "delete_student.php",

			data:{

				stud_id: id

			},

			success: function(){

				$("#modal_confirm").modal('hide');

				$(".del_student" + id).empty();

				$(".del_student" + id).html("<td colspan='6'><center class='text-danger'>Deleting...</center></td>");

				setTimeout(function(){

					$(".del_student" + id).fadeOut('slow');

				}, 1000);

			}

		});

	});

});

</script>








  <!-- AKHIR MODAL DLL-->











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
</html>
