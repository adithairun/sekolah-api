

<?php
// koneksi database
	include '../../akses/conn.php';



// menghapus data dari database
mysqli_query($conn,"TRUNCATE TABLE ekskul");

// mengalihkan halaman kembali ke index.php

header("location:../data-ekskul");

?>
