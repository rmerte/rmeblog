<?php
	session_start();
	include 'login/ayar.php';
	include 'login/ukas.php';

	ukas_cikis("login/ayar.php", "index.php");
	// Ayar dosyası, Çıkış yaptıktan sonra yönlendirilecek adres
?>