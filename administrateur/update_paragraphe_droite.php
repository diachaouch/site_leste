<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$paragraphe_droite = $_POST["paragraphe_droite"];
$q= "select * from presentation_contenu ";
    
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
  $prd= $quer['paragraphe_droite'];

 if(strcmp($paragraphe_droite, $prd)!= 0 && (!empty($paragraphe_droite)))
 {
	 $query = " UPDATE presentation_contenu SET  
paragraphe_droite = '$paragraphe_droite'  WHERE id='1'";
	 if(mysqli_query($connect, $query))
 {
  echo 'paragraphe gauche enregistrer' ;
		 mysqli_close($connect);
 }
 }

 
?>
