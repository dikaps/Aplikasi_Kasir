<?php

$url=$_SERVER["QUERY_STRING"];
$belah=explode("/", $url);
$pecah=explode("-", $belah[0]);

$folder=$belah[1];
$file=$pecah[0];

$v1=$pecah[1];
$v2=$pecah[2];
$v3=$pecah[3];
$v4=$pecah[4];
$v5=$pecah[5];

if ($folder!="" AND $file!="") {
	if (file_exists("halaman/$folder/$file.php")) {
		include ("halaman/$folder/$file.php");
	}
	else{
		echo "Gada File!";
	}
}
else{
	include ("halaman/umum/login.php");
}

?>