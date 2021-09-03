<?php
$conn = mysqli_connect("localhost", "root", "123", "sekolah_api");

	if(!$conn){
		die("Error: Failed to connect to database!");
	}

	$default_query = mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
	$check_default = mysqli_num_rows($default_query);

	if($check_default === 0){
		$enrypted_password = md5('admin');
		mysqli_query($conn, "INSERT INTO `user` VALUES('', 'Administrator', '', 'admin', '$enrypted_password', 'administrator')") or die(mysqli_error());
		return false;
	}

	$versi = "1.1";
	$apk_name = "SEKOLAH-API";

// Membuat variabel, ubah sesuai dengan nama host dan database pada hosting 
$sql_details = array(
    'user' => 'root',
    'pass' => '123',
    'db'   => 'sekolah_api',
    'host' => 'localhost'
);

$con = $sql_details;
$host	= "localhost";
$user	= "root";
$pass	= "123";
$db	    = "sekolah_api";

//Menggunakan objek mysqli untuk membuat koneksi dan menyimpan nya dalam variabel $mysqli	
$mysqli = new mysqli($host, $user, $pass, $db);
?>
