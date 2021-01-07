<?php 
date_default_timezone_set('Europe/Istanbul');

session_start();
	include 'login/ayar.php';
	include 'login/ukas.php';
	
$mysqlconnect = mysqli_connect($host, $root, $password, $dbname);
$mysqlconnect->set_charset("utf8");


$tarih = time();
$icerik = $_POST['icerik'];
$baslik = $_POST['baslik'];
$resimurl = $_POST['resimurl'];
$yazar = $_POST['yazar'];
$kategori = $_POST['kategori'];



$sqlekle="INSERT INTO yazilar( kategori, baslik, yazi, yazar, resimurl, date) 
VALUES ('$kategori', '$baslik','$icerik','$yazar','$resimurl', '$tarih')";

$sonuc = mysqli_query($mysqlconnect,$sqlekle);

header("Location: $sitebase")

?>