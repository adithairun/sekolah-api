<?php 
 
include '../../akses/conn.php';
$id_key = $_POST['id_key'];
$key_api = $_POST['key_api'];



 
mysqli_query($conn,"UPDATE api_sekolah SET  key_api='$key_api' WHERE id_key='$id_key'");
 
header("location:../api-key?pesan=update");
?>
