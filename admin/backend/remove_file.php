<?php

	require_once '../../akses/conn.php';
	if(ISSET($_GET['store_id'])){
		$store_id = $_GET['store_id'];
		$query = mysqli_query($conn, "SELECT * FROM `storage` WHERE `store_id` = '$store_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['filename'];
		$pembina_id = $fetch['pembina_id'];
		if(unlink("../../files/".$pembina_id."/".$filename)){
			mysqli_query($conn, "DELETE FROM `storage` WHERE `store_id` = '$store_id'") or die(mysqli_error());
		}
		echo "<script>alert('Berhasil Hapus')</script>";		echo "<script>window.location = '../dokumentasi'</script>";
	}
?>