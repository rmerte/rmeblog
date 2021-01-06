<?php


session_start();
	include '../login/ayar.php';
	include '../login/ukas.php';
	
$mysqlconnect = mysqli_connect($host, $root, $password, $dbname);
$mysqlconnect->set_charset("utf8");


$logourl = $_POST['logourl'];
$siteadi = $_POST['siteadi'];
$yenikategori = $_POST['kategori'];


if(!empty($yenikategori )){
$sqlekle="INSERT INTO kategoriler ( kategoriadi ) VALUES ('$yenikategori')";

$sonuc = mysqli_query($mysqlconnect,$sqlekle);

}



//Veritabanına bağlanıyoruz.

mysqli_set_charset($mysqlconnect, "utf8");

//güncelleme için SQL sorgumuzu yazıyoruz.
$sql = "UPDATE ayarlar SET siteadi='$siteadi',  logourl='$logourl'";
 
//sorgumuzu çalıştırıyoruz
$sonuc= mysqli_query($mysqlconnect,$sql);


header("Location: /panel")






?>