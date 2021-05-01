<?php
include '../../akses/conn.php';

$username_pembina1 = $_POST['username_pembina1'] ? $_POST['username_pembina1'] : '';

$sql = "SELECT COUNT(*) AS countUsr FROM pembina WHERE username_pembina = '$username_pembina1'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];

echo $count;

?>