<?php
function getRegisteredAPI(){
	return["abcd","123334"];
}

function isInputValid($inputs){
	$apiKey = $inputs["api_key"];
if (in_array($apiKey, getRegisteredAPI())){
	return true;
}else{
	return false;
}

}

if (isInputValid($_GET)){
	header('Content-Type: application/json');
include dirname(dirname(__FILE__)).'/db/Db.class.php';
$db = new Db();
$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
//$name = isset($_GET['name']) ? $_GET['name'] : '';
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';
$jk = isset($_GET['jk']) ? $_GET['jk'] : '';
$tingkat = isset($_GET['tingkat']) ? $_GET['tingkat'] : '';
$agama = isset($_GET['agama']) ? $_GET['agama'] : '';

$jk = isset($_GET['jk']) ? $_GET['jk'] : '';

$sql_limit = '';
if (!empty($limit)) {
    $sql_limit = ' LIMIT 0,'.$limit;
}
$sql_name = '';
if (!empty($name)) {
    $sql_name = ' where tingkat LIKE \'%'.$name.'%\' ';
}

$jurusan_name = '';
if (!empty($jurusan)) {
    $jurusan_name = ' where jurusan LIKE \'%'.$jurusan.'%\' ';
}
$tingkat_name = '';
if (!empty($tingkat)) {
    $tingkat_name = ' where tingkat LIKE \'%'.$tingkat.'%\' ';
}

$jk_name = '';
if (!empty($jk)) {
    $jk_name = ' where jk LIKE \'%'.$jk.'%\' ';
}


$agama_name = '';
if (!empty($agama)) {
    $agama_name = ' where agama LIKE \'%'.$agama.'%\' and tingkat LIKE \'%'.$tingkat.'%\' and jurusan LIKE \'%'.$jurusan.'%\' ';
}






//$cat_list = $db->query('select * from categories '.$sql_name.' '.$sql_limit);
//$cat_list = $db->query('select * from data_siswa');
$cat_list = $db->query('select * from data_siswa  '.$agama_name.''.$tingkat_name.' '.$sql_limit);
$arr = array();
$arr['info'] = 'success';
$arr['num'] = count($cat_list);
$arr['result'] = $cat_list;
echo json_encode($arr);
	//echo "input valid";
}else {
	
	echo "gagal";
}
?>