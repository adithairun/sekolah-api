<?php
include 'inc.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Kategori</title>
    </head>
    
    <body>
    <?php
    $api_categories_list = $api_url.'/siswa/index.php?agama=Islam&tingkat=10&api_key='.$api_key;
    $json_list = @file_get_contents($api_categories_list);
    ?>
    <h1>Kategori</h1>
    <?php
    $info = isset($_GET['info']) ? $_GET['info'] : '';
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    if (!empty($info)) {
        echo 'Info: '.$info;
        echo '<br />Msg: '.$msg;
        echo '<br />';
    }
    ?>
    <p> <a href="kategori.php">Reload</a></p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tingkat</th>
            <th>Kelas</th>
            <th>Update</th>
            
        </tr>
		
        <?php
        $array = json_decode($json_list, true);
        $result = isset($array['result']) ? $array['result'] : array();
        $no = 0;
        foreach($result as $arr) {
            $no++;
            
            echo '
            <tr>
                <td>'.$no.'</td>
                <td>'.$arr['nama_siswa'].'</td>
                <td>'.$arr['nis'].'</td>
                <td>'.$arr['agama'].'</td>
                <td>'.$arr['tingkat'].'</td>
                
                
            </tr>
            ';
        }
		
		
		

        ?>
		<?php


echo "<h3>$no</h3>";

?>
    </table>
    </body>
</html>