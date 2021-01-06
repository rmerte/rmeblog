 <?php 
 $mysqlconnect = mysqli_connect($host, $root, $password, $dbname);
 $mysqlconnect->set_charset("utf8");
$ayarsql = $mysqlconnect->query("SELECT * FROM ayarlar ORDER BY id asc");

$ayarcek=mysqli_fetch_array ($ayarsql);

$logourl 	= $ayarcek["logourl"]; 

$siteadi	= $ayarcek["siteadi"]; 

 
 
 
 ?>
 
 
 
 <div class="logoarea">
  
  <a href="/"> <img class="logoheader" src="<?php echo $logourl ?>" alt="logo" /></a>
 
  
  
  </div>
  
  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <!-- <a class="navbar-brand" href="#">Bloggz</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Ana sayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">customKategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">customKategori2</a>
      </li>
    </ul>

	<?php if(isset($_SESSION["uye_kadi"])){
	echo '
	<ul class="navbar-nav mr-5"><li class="nav-item">
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    '.@$_SESSION["uye_adsoyad"].'
  </button>
  <div class="dropdown-menu dropdownfix" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/editor.php">Yeni Yazı</a>
	<a class="dropdown-item" href="/panel">Yönetim Paneli</a>
    <a class="dropdown-item" href="/logout.php">Çıkış</a>
   
  </div>
</div>
</li>
</ul>

'; 
	}
	
	else {
		
		echo '<span class="navbar-text">
    <a class="loginbutton" href="login">Giriş</a>
  </span>';
		
		
	}
	
	
	?>
  </div>
</nav>