<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$paragraphe_gauche = $_POST["paragraphe_gauche"];
$q= "select * from presentation_contenu ";
    
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
  $prg= $quer['paragraphe_gauche'];

 if(strcmp($paragraphe_gauche, $prg)!= 0 && (!empty($paragraphe_gauche)))
 {
	 $query = " UPDATE presentation_contenu SET  
paragraphe_gauche = '$paragraphe_gauche'  WHERE id='1'";
	 if(mysqli_query($connect, $query))
 {
  echo 'paragraphe gauche enregistrer' ;
		 mysqli_close($connect);
 }
 }

 
?>
