<?php
require '../../akses/validator.php';

// koneksi database
include '../../akses/conn.php';

// menangkap data id yang di kirim dari url
$ekskul_id = $_GET['ekskul_id'];


// menghapus data dari database
mysqli_query($conn,"delete from ekskul where ekskul_id='$ekskul_id'");

// mengalihkan halaman kembali ke index.php
echo "<script>alert('Berhasil Hapus Ekskul')</script>";		echo "<script>window.location = '../data-ekskul'</script>";
 ?>
