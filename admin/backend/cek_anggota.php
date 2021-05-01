<?php
include '../../akses/conn.php';

$username_siswa = $_POST['username_siswa'] ? $_POST['username_siswa'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM student WHERE username_siswa = '$username_siswa'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>