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
$tingkat = isset($_GET['tingkat']) ? $_GET['tingkat'] : '';
$nisn = isset($_GET['nisn']) ? $_GET['nisn'] : '';
$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';

$sql_limit = '';
if (!empty($limit)) {
    $sql_limit = ' LIMIT 0,'.$limit;
}
$sql_name = '';
if (!empty($name)) {
    $sql_name = ' where tingkat LIKE \'%'.$name.'%\' ';
}

$tanggal_name = '';
if (!empty($tanggal)) {
    $tanggal_name = ' AND tanggal_lahir LIKE \'%'.$tanggal.'%\' ';
}

$nisn_name = '';
if (!empty($nisn)) {
    $nisn_name =  $nisn.'%\' and tanggal_lahir LIKE \'%'.$tanggal.'%\'  ';
}





//$cat_list = $db->query('select * from categories '.$sql_name.' '.$sql_limit);
//$cat_list = $db->query('select * from data_siswa');
$cat_list = $db->query('select * from data_siswa where nisn LIKE \'%'.$nisn_name.' '.$sql_limit);
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