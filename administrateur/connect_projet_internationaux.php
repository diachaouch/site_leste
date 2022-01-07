<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$id = $_POST['id'];
$type = $_POST["type"];
$duree = $_POST["duree"];
$titre = $_POST["titre"];
$responsable_tunisien = $_POST["responsable_tunisien"];
$responsable_francais = $_POST["responsable_francais"];



$query = " UPDATE projets_internationaux SET type = '$type',
duree = '$duree',
titre = '$titre',
responsable_tunisien = '$responsable_tunisien',
responsable_francais = '$responsable_francais' WHERE id='$id' ";
 if(mysqli_query($connect, $query))
 {
  echo ' mis à jour  avec succès';
  
 }


?>
