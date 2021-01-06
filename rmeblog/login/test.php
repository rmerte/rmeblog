<?php
	session_start();
	include 'ayar.php';
	include 'ukas.php';
?>

<?php
	ukas_giris("ayar.php", "testprofil.php", "<div class='uyari'>Lütfen boş bırakmayınız!</div>", "<div class='uyari' >Kullanıcı adı veya şifre hatalı!</div>");
	// Ayar dosyası, Giriş yapıldıktan sonra yönlendirilecek yer, Uyarı mesajı, Hata mesajı
?>
<strong>Giriş</strong><br />
<form action="" method="POST">
	<input type="text" name="kadi" placeholder="Kullanıcı adı"><br />
	<input type="password" name="sifre" placeholder="Şifre"><br />
	<input type="submit" name="giris" value="Giriş">
</form>

<hr>
<?php


	ukas_kayit("ayar.php", "<div class='uyari' >Lütfen boş bırakmayınız!</div>", "<div class='uyari' >Böyle bir eposta mevcut! Lütfen başka bir tane deneyiniz!</div>", "<div class='uyari' >Böyle bir kullanıcı adı mevcut! Lütfen başka bir tane deneyiniz!</div>", "<div class='uyari' >Başarıyla kaydoldun! :)</div>", "test.php", "<div class='uyari' >Kullanıcı adı veya şifre hatalı!</div>", "<div class='uyari' >Kayıt başarısız!</div>", "<div class='uyari' >Şifreleriniz eşleşmiyor!</div>", "<div class='uyari' >Lütfen gerçek bir eposta giriniz!</div>", false);
	// Ayar dosyası, Boş bırakma uyarısı, Mail mevcutsa, Kullanıcı adı mevcutsa, Kayıt başarılıysa, Kayıt yaptıktan sonra yönlendirilecek adres, Kullanıcı adı veya şifre hatalıysa, Kayıt başarısızsa, Şifreler eşleşmiyorsa, Eğer mail gerçek değilse, Mail gönderilsin mi?
?>
<strong>Kayıt</strong><br />
<form action="" method="POST">
	<input type="text" name="adsoyad" placeholder="Ad Soyad"><br />
	<input type="text" name="kadi" placeholder="Kullanıcı adı"><br />
	<input type="password" name="sifre" placeholder="Şifre"><br />
	<input type="password" name="sifret" placeholder="Şifre Tekrar"><br />
	<input type="text" name="eposta" placeholder="E Mail"><br />
	<input type="submit" name="kayit" value="Kayıt">
</form>