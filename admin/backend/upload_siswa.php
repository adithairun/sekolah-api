<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php
date_default_timezone_set("Asia/Makassar");
// menghubungkan dengan koneksi
include '../../akses/conn.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";

mysqli_query($conn,"TRUNCATE TABLE data_siswa");
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;

for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
			
  		
  		$nama_siswa      =$data->val($i, 1);
  		$nis   =$data->val($i, 2);
    	$jk   =$data->val($i, 3);
		$nisn  =$data->val($i, 4);
		$tempat_lahir  =$data->val($i, 5);
		$tanggal_lahir  =$data->val($i, 6);
		$nik  =$data->val($i, 7);
		$agama =$data->val($i, 8);
		$alamat  =$data->val($i, 9);
		$kelurahan  =$data->val($i, 10);
		$kecamatan =$data->val($i, 11);
		$hp  =$data->val($i, 12);
		$email =$data->val($i, 13);
		$nama_ayah  =$data->val($i, 14);
		$pendidikan_ayah  =$data->val($i, 15);
		$pekerjaan_ayah  =$data->val($i, 16);
		$nama_ibu  =$data->val($i, 17);
		$pendidikan_ibu  =$data->val($i, 18);
		$pekerjaan_ibu  =$data->val($i, 19);
		$rombel  =$data->val($i, 20);
		$tingkat  =$data->val($i, 21);
		$jurusan  =$data->val($i, 22);
		$sekolah_asal  =$data->val($i, 23);
		


	if($nama_siswa != "" && $nisn != "" ){
		{
			$nama_siswa = mysqli_real_escape_string($conn, $nama_siswa);
			$nama_ibu = mysqli_real_escape_string($conn, $nama_ibu);
			$nama_ayah = mysqli_real_escape_string($conn, $nama_ayah);
			$update_terakir = (date('Y-m-d_H:i:s'));
	}
$query= mysqli_query($conn,"INSERT into data_siswa VALUES('','$nama_siswa', '$nis', '$jk', '$nisn', '$tempat_lahir', '$tanggal_lahir', '$nik', '$agama', '$alamat', '$kelurahan','$kecamatan', '$hp','$email','$nama_ayah','$pendidikan_ayah','$pekerjaan_ayah','$nama_ibu','$pendidikan_ibu','$pekerjaan_ibu','$rombel','$tingkat','$jurusan','$sekolah_asal','$update_terakir')");
	}
	

}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);
echo "<script>alert('BERHASIL IMPORT')</script>";

echo "<script>window.location = '../data-siswa'</script>";
		
?>
