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
       
        array( 'db' => 'id_siswa', 'dt' => 7 )
    );

    // SQL server connection information
    require_once "config/database.php";
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