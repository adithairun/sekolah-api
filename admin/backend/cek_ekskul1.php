<?php
include '../../akses/conn.php';

$nama_ekskul1 = $_POST['nama_ekskul1'] ? $_POST['nama_ekskul1'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM ekskul WHERE nama_ekskul = '$nama_ekskul1'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>