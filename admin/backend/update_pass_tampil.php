<?php 
 
include '../../akses/conn.php';
$id = $_POST['id'];
$kodetoken = $_POST['kodetoken'];



 
mysqli_query($conn,"UPDATE tokenmasuk SET kodetoken='$kodetoken' WHERE id='$id'");
 
header("location:../password-tampil?pesan=update");
?>
