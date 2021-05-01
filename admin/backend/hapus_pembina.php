<?php
require '../../akses/validator.php';

// koneksi database
include '../../akses/conn.php';
 
// menangkap data id yang di kirim dari url
$pembina_id = $_GET['pembina_id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from pembina where pembina_id='$pembina_id'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Berhasil Hapus Akun Pembina)</script>";		echo "<script>window.location = '../pembina-ekskul'</script>";
 ?>