<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
	// panggil file config.php untuk koneksi ke database
	require_once "config/config.php";
	// jika tombol get ubah diklik
    if (isset($_GET['id_siswa'])) {
    	// ambil data get dari ajax
    	$id_siswa = $_GET['id_siswa'];
		// perintah query untuk menampilkan data dari tabel transaksi berdasarkan id_transaksi
		$result = $mysqli->query("SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'")
		                          or die('Ada kesalahan pada query tampil data transaksi: '.$mysqli->error);
		$data = $result->fetch_assoc();
	}
	// tutup koneksi
	$mysqli->close(); 
	 
	echo json_encode($data); 
} else {
    echo '<script>window.location="index.php"</script>';
}
?>