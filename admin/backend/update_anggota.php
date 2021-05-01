<?php	require_once '../../akses/conn.php';	
if(ISSET($_POST['update'])){				
$stud_id = $_POST['stud_id'];		
$nama_siswa = $_POST['nama_siswa'];		
$username_siswa = $_POST['username_siswa'];	
$password_siswa = $_POST['password_siswa'];
$ekskul_id = $_POST['ekskul_id'];		
			
{						
$nama = mysqli_real_escape_string($conn, $nama_siswa);			
	
}		
mysqli_query($conn, "UPDATE `student` SET `nama_siswa` = '$nama_siswa',  `username_siswa` = '$username_siswa', `password_siswa` = '$password_siswa', `ekskul_id` = '$ekskul_id' WHERE `stud_id` = '$stud_id'") or die(mysqli_error($conn));;		
echo "<script>alert('Successfully updated!')</script>";		echo "<script>window.location = '../anggota-ekskul'</script>";	}?>