<?php
error_reporting(0);
session_start();
$kon=mysqli_connect("localhost","root","","db_andika") or die ("Belum Konek");
include ("common/var.php");
include ("common/class_template.php");
include ("common/query.php");
$tem=new template();

if ($_SESSION['id']=="") {
	include ("common/link.php");
}

else{
	include ("common/link_dalam.php");
	include ("template/dashboard.php");
	
}

include ("template/layout.php");

?>