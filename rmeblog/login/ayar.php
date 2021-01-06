<?php
	
	$host 		= "host";
	$dbname 	= "dbname";
	$charset 	= "utf8";
	$root 		= "dbusername";
	$password 	= "dbpass";

	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
	}catch(PDOExeption $error){
		echo $error->getMessage();
	}
?>