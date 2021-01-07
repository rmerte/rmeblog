<!doctype html>

<?php
	session_start();
	include 'login/ayar.php';
	include 'login/ukas.php';
?>

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	
	
	

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css" />


    <title>Kurulum</title>
  </head>
  <body>
  
  <!-- header -->
  
  <div class="logoarea">
  
  <img class="logoheader" src="demologo.png" alt="logo" />
 
  
  
  </div>
  
  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <!-- <a class="navbar-brand" href="#">Bloggz</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $sitebase; ?>">Ana sayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kategori2</a>
      </li>
    </ul>

  </div>
</nav>
<!-- header bitiş -->


<?php

$mysqlconnect = mysqli_connect($host, $root, $password, $dbname);
$sqlin= "select * from ayarlar"; 
$sql_baglan= mysqli_query($mysqlconnect, $sqlin); 
$ayarbilgi = mysqli_num_rows($sql_baglan);


$logourl = @$_POST['logourl'];
$siteadi = @$_POST['siteadi'];

if (isset($logourl)){
	
	
$sqlekle="INSERT INTO ayarlar( logourl, siteadi ) 
VALUES ('$logourl','$siteadi')";

$sonuc = mysqli_query($mysqlconnect,$sqlekle);

	
	
}











if ($ayarbilgi == 0) {

 echo'

<div class="editoralani">

<form action="install.php" method="post">
<input class="form-control" name="logourl" type="text" placeholder="Logo Linki (başında http:// olmalı)">
<input class="form-control" name="siteadi" type="text" placeholder="Site adı">

<input class="btn btn-primary edtbutton" type="submit" value="Gönder">
</form>


</div>

';
}


else {
	
	echo ' <div class="uyari">Kurulum işlemi daha önce gerçekleştirildi. Güvenliğiniz için install.php dosyasını siliniz.</div>';
	
}








?>
<footer class="page-footer font-small footerstil bg-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a class="footertext" href="https://<?php echo $_SERVER['HTTP_HOST'];?>"> <?php echo $_SERVER['HTTP_HOST'];?></a>
  </div>
  <!-- Copyright -->

</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="ckeditor/ckeditor.js"></script>
 </body>
</html>