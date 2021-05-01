<?php
	require_once '../../akses/conn.php';
	
	if(ISSET($_POST['save'])){
		
		
		$ekskul_id = $_POST['ekskul_id'];
		$username_pembina = $_POST['username_pembina'];
		$password_pembina = $_POST['password_pembina'];
		$foto_pembina = $_POST['foto_pembina'];
		$cekdulu= "select * from pembina where username_pembina='$_POST[username_pembina]'"; 
$prosescek= mysqli_query($conn, $cekdulu);
		if (mysqli_num_rows($prosescek)>0) { 
			echo "<script>alert('Username Pembina Sudah Ada, silahkan ganti');history.go(-1) </script>";
		}
		else {
		mysqli_query($conn, "INSERT INTO `pembina` VALUES('', '$ekskul_id', '$username_pembina', '$password_pembina', '$foto_pembina')") or die(mysqli_error($conn));
		
		echo "<script>alert('Berhasil Tambah Akun Pembina')</script>";		echo "<script>window.location = '../pembina-ekskul'</script>";
	}
	}
?>