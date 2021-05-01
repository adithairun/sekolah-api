<?php
	require_once '../akses/conn.php';
	
	if(ISSET($_POST['save'])){
		
		
		
		$nama_ekskul = $_POST['nama_ekskul'];
		$pembina_ekskul = $_POST['pembina_ekskul'];
		$cekdulu= "select * from ekskul where nama_ekskul='$_POST[nama_ekskul]'"; 
$prosescek= mysqli_query($conn, $cekdulu);
		if (mysqli_num_rows($prosescek)>0) { 
			echo "<script>alert('Ekstrakurikuler Sudah Ada');history.go(-1) </script>";
		}
		else {
		mysqli_query($conn, "INSERT INTO `ekskul` VALUES('', '$nama_ekskul', '$pembina_ekskul')") or die(mysqli_error($conn));
		
		echo "<script>alert('Berhasil Tambah Ekstrakurikuler')</script>";		echo "<script>window.location = 'data-ekskul'</script>";
	}
}
?>