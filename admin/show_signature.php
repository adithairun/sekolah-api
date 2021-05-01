<?php
$link = new mysqli('localhost', 'root', '123', 'ekskul');
//cek apakah koneksi dengan MySQL berhasil

$sql="SELECT * FROM signature WHERE id = 28";
$result=mysqli_query($link,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$filename = $row['img'];
$image = $row['base64'];

$pecah = explode(",", $image);
echo '<img src="data:image/png;base64,'.$hasil = $pecah[1].'"/>';
?>