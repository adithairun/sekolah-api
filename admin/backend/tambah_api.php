<?php 
 
include '../../akses/conn.php';

$api_key = $_POST['api_key'];
$ket = $_POST['ket'];


 
mysqli_query($conn,"INSERT INTO token VALUES ('','$ket', '$api_key')");
 
header("location:../api-token?pesan=update");
?>
