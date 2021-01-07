<!doctype html>
<?php
	session_start();
	include 'ayar.php';
	include 'ukas.php';
?>


<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../styles.css" />
    <title>Giriş</title>
  </head>
  <body>
   
   
   <?php
	ukas_giris("ayar.php", "../index.php", "<div class='uyari'>Lütfen boş bırakmayınız!</div>", "<div class='uyari' >Kullanıcı adı veya şifre hatalı!</div>");
	// Ayar dosyası, Giriş yapıldıktan sonra yönlendirilecek yer, Uyarı mesajı, Hata mesajı

ukas_kayit("ayar.php", "<div class='uyari' >Lütfen boş bırakmayınız!</div>", "<div class='uyari' >Böyle bir eposta mevcut! Lütfen başka bir tane deneyiniz!</div>", "<div class='uyari' >Böyle bir kullanıcı adı mevcut! Lütfen başka bir tane deneyiniz!</div>", "<div class='basarili' >Kayıt başarılı!</div>", "../index.php", "<div class='uyari' >Kullanıcı adı veya şifre hatalı!</div>", "<div class='uyari' >Kayıt başarısız!</div>", "<div class='uyari' >Şifreleriniz eşleşmiyor!</div>", "<div class='uyari' >Lütfen gerçek bir eposta giriniz!</div>", false);



?>
   <div class="container">
  <div class="row">
    <div class="col-md">
       <div class="loginbox"> 
   <div class="loginbaslik">Giriş</div>
 <form action="" method="POST">
 
  <div class="form-group">
	
    <label for="kullaniciadi">Kullanıcı Adı</label>
    <input name="kadi" type="text" class="form-control" id="kullaniciadi" placeholder="Kullanıcı Adı">
    
  </div>
  <div class="form-group">
    <label for="sifre">Şifre</label>
    <input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifre">
  </div>
  
  <button name="giris" type="submit" class="btn btn-primary loginbuttoncenter">Giriş</button>
</form>
   
   </div>
    </div>
    <div class="col-md">
       <div class="loginbox"> 
      <div class="loginbaslik">Kayıt</div>
 <form action="" method="POST">
  <div class="form-group">
    <label for="kullaniciadi">Kullanıcı Adı</label>
    <input name="kadi" type="text" class="form-control" id="kullaniciadi" placeholder="Kullanıcı Adı">
	 <label for="adsoyad">Ad Soyad</label>
    <input name="adsoyad" type="text" class="form-control" id="adsoyad" placeholder="Ad Soyad">
    
  </div>
  <div class="form-group">
    <label for="sifre">Şifre</label>
    <input name="sifre" type="password" class="form-control" id="sifre" placeholder="Şifre">
	<label for="sifretekrar">Şifre Tekrar</label>
    <input name="sifret" type="password" class="form-control" id="sifretekrar" placeholder="Şifre Tekrar">
	<label for="email">E-Posta</label>
    <input name="eposta" type="text" class="form-control" id="email" placeholder="E-posta">
  </div>
  
  <button type="submit" name="kayit" class="btn btn-primary loginbuttoncenter">Kayıt</button>
</form>
   
   </div>
    </div>

  </div>
</div>
   
   
   
   
   
   
   
 
   
   
  
   
  
   
   
   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>