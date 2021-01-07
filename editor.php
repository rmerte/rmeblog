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


    <title>Yeni Yazı</title>
  </head>
  <body>
  
  <!-- header -->
  
<?php include 'header.php';?>
<!-- header bitiş -->
<!-- içerik başlangıç -->

<?php

$yazar = $_SESSION["uye_adsoyad"];



 ?>


<div class="editoralani">

<form action="ekle.php" method="post">
<input class="form-control" name="resimurl" type="text" placeholder="Resim URL - 150x150 olmalıdır.">


<select class="form-control" name="kategori">

<?php 

$sql = "SELECT * FROM kategoriler order by id";
$result = $mysqlconnect->query($sql);
if ($result->num_rows > 0) {

    // her bir satırı döker

    while($row = $result->fetch_assoc()) {


	echo ' <option value="'.$row['id'].'">'.$row['kategoriadi'].'</option> ';


    }

} 




?>


	
 </select>






<input class="form-control" name="baslik" type="text" placeholder="Başlık">
<textarea name="icerik" class="ckeditor" id="ckeditor1"></textarea>
 <input type="hidden" name="yazar" value="<?php echo $yazar; ?>">
<input class="btn btn-primary edtbutton" type="submit" value="Gönder">
</form>


</div>



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