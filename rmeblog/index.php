<!doctype html>

<?php
error_reporting(1);
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


    <title>RMEBLOG v1</title>
  </head>
  <body>
  
  <!-- header -->
  <?php include 'header.php'; ?>
 
<!-- header bitiş -->
<!-- içerik başlangıç -->
 <div class="row">
    <div class="col-md-10 ">
	
 <div class="container controlborder">
 
 
 
 
 
 <?php 

 
 
// $mysqlconnect = mysqli_connect($host, $root, $password, $dbname);
$sql = "SELECT * FROM yazilar order by id desc";
$result = $mysqlconnect->query($sql);
if ($result->num_rows > 0) {

    // her bir satırı döker

    while($row = $result->fetch_assoc()) {


	echo ' <a href="yazi.php?id='.$row["id"].'" ><div class="icerikresim"><div class="imghizala"><img src="'.$row['resimurl'].'"/></div><p class="baslik">'.$row['baslik'].'</p></div> </a>';


    }

} 
 ?>
 
 
 
 
 
 



</div>
    </div>
	
	
	
	
    <div class="col-md-2">
		<div class="container kategorialan">
		<div class="kategoribaslik"><b>Kategoriler</b></div>
		<a href="/"><div class="kategori">Ana sayfa</div> </a>
	

		<?php 
		
		
		include 'kategoriler.php';
		
		?>
		
		</div>

	 
    </div>
  
  </div>



<footer class="page-footer font-small footerstil bg-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a class="footertext" href="https://siteadi.com"> siteadi.com</a>
  </div>
  <!-- Copyright -->

</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>