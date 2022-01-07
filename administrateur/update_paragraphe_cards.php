<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$cards = $_POST["cards"];
$q= "select * from presentation_contenu ";
    
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
  $prd= $quer['cards'];

 if(strcmp($cards, $prd)!= 0 && (!empty($cards)))
 {
	 $query = " UPDATE presentation_contenu SET  
cards = '$cards'  WHERE id='1'";
	 if(mysqli_query($connect, $query))
 {
  echo ' enregistrer' ;
		 mysqli_close($connect);
 }
 }

 
?>
