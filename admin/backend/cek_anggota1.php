<?php
include '../../akses/conn.php';

$username_siswa1 = $_POST['username_siswa1'] ? $_POST['username_siswa1'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM student WHERE username_siswa = '$username_siswa1'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>