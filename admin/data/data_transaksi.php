<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

    // nama table
    $table = 'data_siswa';
    // Table's primary key
    $primaryKey = 'id_siswa';

    $columns = array(
       
        array( 'db' => 'nama_siswa', 'dt' => 1 ),
        
        array( 'db' => 'nis', 'dt' => 2 ),
        
        array( 'db' => 'jk', 'dt' => 3 ),
        array( 'db' => 'nisn', 'dt' => 4 ),
        array( 'db' => 'tempat_lahir', 'dt' => 5 ),
        array( 'db' => 'tanggal_lahir', 'dt' => 6 ),
        array( 'db' => 'nik', 'dt' => 7 ),
        array( 'db' => 'agama', 'dt' => 8 ),
        array( 'db' => 'alamat', 'dt' => 9 ),
        array( 'db' => 'kelurahan', 'dt' => 10 ),
        array( 'db' => 'kecamatan', 'dt' => 11 ),
        array( 'db' => 'hp', 'dt' => 12 ),
        array( 'db' => 'email', 'dt' => 13 ),
        array( 'db' => 'nama_ayah', 'dt' => 14 ),
        array( 'db' => 'pendidikan_ayah', 'dt' => 15 ),
        array( 'db' => 'pekerjaan_ayah', 'dt' => 16 ),
        array( 'db' => 'nama_ibu', 'dt' => 17 ),
        array( 'db' => 'pendidikan_ibu', 'dt' => 18 ),
        array( 'db' => 'pekerjaan_ibu', 'dt' => 19 ),
        array( 'db' => 'rombel', 'dt' => 20 ),
        array( 'db' => 'tingkat', 'dt' => 21 ),
        array( 'db' => 'jurusan', 'dt' => 22 ),
        array( 'db' => 'sekolah_asal', 'dt' => 23 ),
        array( 'db' => 'update_terakhir', 'dt' => 24 ),
        array( 'db' => 'id_siswa', 'dt' => 25 )
    );

    // SQL server connection information
    require_once "../../akses/conn.php";
    // ssp class
    require 'config/ssp.class.php';
    // require 'config/ssp.class.php';

    echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );
} else {
    echo '<script>window.location="index.php"</script>';
}
?>