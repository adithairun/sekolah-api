<?php
// koneksi database
include '../../akses/conn.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from token where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../api-token");
 ?>