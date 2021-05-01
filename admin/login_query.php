<?php
	session_start();
	require '../akses/conn.php';
	
	// menangkap data yang dikirim dari form
$username = addslashes(trim($_POST['username']));
$password = md5($_POST['password']);
 //$status = "administrator";
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' && password = '$password' ") or die(mysqli_error());
 $fetch = mysqli_fetch_array($data);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['user'] = $fetch['user_id'];
			$_SESSION['status'] = "login";
			header("location:home");
}else{
	
	echo "<script>alert('Username atau Password Salah')</script>";		echo "<script>window.location = 'index'</script>";
//header("location:index");
}

	
	

?>