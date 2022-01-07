<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$equipements = $_POST["equipements"];
$q= "select * from presentation_contenu ";
    
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
  $prd= $quer['equipements'];

 if(strcmp($equipements, $prd)!= 0 && (!empty($equipements)))
 {
	 $query = " UPDATE presentation_contenu SET  
equipements = '$equipements'  WHERE id='1'";
	 if(mysqli_query($connect, $query))
 {
  echo ' enregistrer' ;
		 mysqli_close($connect);
 }
 }

 
?>
