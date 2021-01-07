<?php
	
	$host 		= "sql113.epizy.com";
	$dbname 	= "epiz_26155039_projekontrol";
	$charset 	= "utf8";
	$root 		= "epiz_26155039";
	$password 	= "xZDDmbgr4NN";
	$sitebase   = "/deneme";

	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
	}catch(PDOExeption $error){
		echo $error->getMessage();
	}
?>