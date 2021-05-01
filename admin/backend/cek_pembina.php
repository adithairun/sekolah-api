<?php
include '../../akses/conn.php';

$username_pembina = $_POST['username_pembina'] ? $_POST['username_pembina'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM pembina WHERE username_pembina = '$username_pembina'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>