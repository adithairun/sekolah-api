<?php 
 
include '../../akses/conn.php';
$id = $_POST['id'];
$api_key = $_POST['api_key'];
$ket = $_POST['ket'];


 
mysqli_query($conn,"UPDATE token SET ket='$ket', api_key='$api_key' WHERE id='$id'");
 
header("location:../api-token?pesan=update");
?>
