<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$paragraphe_droite = $_POST['paragraphe_droite'];



$query = " UPDATE presentation_contenu SET paragraphe_droite = '$paragraphe_droite' ";
 if(mysqli_query($connect, $query))
 {
  echo ' mis à jour  avec succès';
	 mysqli_close($connect);
  
 }



?>
