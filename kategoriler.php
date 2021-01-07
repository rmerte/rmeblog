<?php

$sql = "SELECT * FROM kategoriler order by id";
$result = $mysqlconnect->query($sql);
if ($result->num_rows > 0) {

    // her bir satırı döker

    while($row = $result->fetch_assoc()) {


	echo'	<a href="kategori.php?id='.$row['id'].'"><div class="kategori">'.$row['kategoriadi'].'</div> </a>';


    }

} 

?>