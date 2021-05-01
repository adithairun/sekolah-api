<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php
// menghubungkan dengan koneksi
include '../../akses/conn.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
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
  		
  		$ekskul_id    =$data->val($i, 2);
    	$username_siswa   =$data->val($i, 3);
		$password_siswa  =$data->val($i, 4);
			
	$check = mysqli_query($conn,"SELECT * FROM student WHERE username_siswa='".$username_siswa."' LIMIT 1");

$num = mysqli_num_rows($check);
if($num  < 1){
	if($nama_siswa != "" && $ekskul_id != "" && $username_siswa != "" && $password_siswa != "" ){

$query= mysqli_query($conn,"INSERT into student VALUES('','$nama_siswa', '$ekskul_id', '$username_siswa', '$password_siswa')");

	}

 $hasil = mysqli_query($conn, $query);
echo "<script>alert('Semua Berhasil Diupload')</script>";echo "<script>window.location = '../anggota-ekskul'</script>";
}else{

// ane pilih skip maka digunakan continue

echo "<script>alert('Ada username pembina yang sudah digunakan di sistem, silahkan diperiksa | Selain itu berhasil diimport')</script>";
echo "<script>window.location = '../anggota-ekskul'</script>";

}
	
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
		
?>
