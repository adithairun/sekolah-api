<?php
	require_once '../../akses/conn.php';
	
	if(ISSET($_POST['save'])){
		
		$nama_siswa = $_POST['nama_siswa'];
		$ekskul_id = $_POST['ekskul_id'];
		$username_siswa = $_POST['username_siswa'];
		$password_siswa = $_POST['password_siswa'];
		$foto_siswa = $_POST['foto_siswa'];
		$cekdulu= "select * from student where username_siswa='$_POST[username_siswa]'"; 
		$prosescek= mysqli_query($conn, $cekdulu);
		if (mysqli_num_rows($prosescek)>0) { 
			echo "<script>alert('Username Siswa Sudah Ada, silahkan ganti');history.go(-1) </script>";
		}
		else {
		
		mysqli_query($conn, "INSERT INTO `student` VALUES('', '$nama_siswa', '$ekskul_id', '$username_siswa', '$password_siswa', '$foto_siswa')") or die(mysqli_error());
		
		echo "<script>alert('Berhasil Tambah Anggota')</script>";		echo "<script>window.location = '../anggota-ekskul'</script>";
	}
	}
?>