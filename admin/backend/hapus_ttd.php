<?php
require '../../akses/validator.php';

// koneksi database
include '../../akses/conn.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($conn,"delete from signature where id='$id'");

// mengalihkan halaman kembali ke index.php
echo "<script>alert('Berhasil Hapus')</script>";		echo "<script>window.location = '../ttd-siswa'</script>";
 ?>
