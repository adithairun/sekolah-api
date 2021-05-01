

<?php
// koneksi database
	include '../../akses/conn.php';



// menghapus data dari database
mysqli_query($conn,"TRUNCATE TABLE pembina");

// mengalihkan halaman kembali ke index.php

header("location:../pembina-ekskul");

?>
