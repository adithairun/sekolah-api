<?php	require_once '../../akses/conn.php';	
if(ISSET($_POST['update'])){				
    
    $pembina_id = $_POST['pembina_id'];
    $ekskul_id = $_POST['ekskul_id'];
    $username_pembina = $_POST['username_pembina'];
    $password_pembina = $_POST['password_pembina'];	
	$foto_pembina = $_POST['foto_pembina'];	
		
			
		
    mysqli_query($conn, "UPDATE `pembina` SET `ekskul_id` = '$ekskul_id',  `username_pembina` = '$username_pembina', `password_pembina` = '$password_pembina', `foto_pembina` = '$foto_pembina' WHERE `pembina_id` = '$pembina_id'") or die(mysqli_error($conn));;		
    echo "<script>alert('Successfully updated!')</script>";		echo "<script>window.location = '../pembina-ekskul'</script>";	}?>