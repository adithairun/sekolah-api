<?php	require_once '../../akses/conn.php';	
if(ISSET($_POST['update'])){				
    
    
    $ekskul_id = $_POST['ekskul_id'];
    $nama_ekskul = $_POST['nama_ekskul'];
    $pembina_ekskul = $_POST['pembina_ekskul'];		
			
		
    mysqli_query($conn, "UPDATE `ekskul` SET `ekskul_id` = '$ekskul_id',  `nama_ekskul` = '$nama_ekskul', `pembina_ekskul` = '$pembina_ekskul' WHERE `ekskul_id` = '$ekskul_id'") or die(mysqli_error($conn));;		
    echo "<script>alert('Successfully updated!')</script>";		echo "<script>window.location = '../data-ekskul'</script>";	}?>