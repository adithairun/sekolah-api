<?php
$url = "http://localhost/proyek/sekolah-api/api/categories/news.php?api_key=abcd";
$client = curl_init($url);
//curl_setopt($client, CURLPOT_RETURNTRANSFER,true);
$response = curl_exec ($client);
$result = json_decode($client);

$agama = $result[2]['$arr']['agama'];

echo "Agama: ". $agama;
 for($a=0; $a < count($result); $a++)
 {
	 echo $result[$a]['$arr']['agama'];
 }

?>