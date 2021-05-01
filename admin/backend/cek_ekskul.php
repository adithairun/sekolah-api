<?php
include '../../akses/conn.php';

$nama_ekskul = $_POST['nama_ekskul'] ? $_POST['nama_ekskul'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM ekskul WHERE nama_ekskul = '$nama_ekskul'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>