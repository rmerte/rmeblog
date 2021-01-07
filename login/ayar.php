<?php
	
	$host 		= "hostadi";
	$dbname 	= "dbadi";
	$charset 	= "utf8";
	$root 		= "dbkullaniciadi";
	$password 	= "dbsifre";
	$sitebase   = "https://websiteadresiniz/blog/klasoru"; // sonuna "/" işareti koymayınız.

	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
	}catch(PDOExeption $error){
		echo $error->getMessage();
	}
?>