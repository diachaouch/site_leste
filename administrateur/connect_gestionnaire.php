<?php
$connect = mysqli_connect("localhost", "root", "", "sport");
$id = $_POST['id'];
$user_id = $_POST["user_id"];
$name = $_POST["name"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$categorie = $_POST["categorie"];
$login = $_POST["login"];
$mot_de_passe = $_POST["mot_de_passe"];


$query = " UPDATE gestionnaire SET name = '$name',
email = '$email',
telephone = '$telephone',
login = '$login',
mot_de_passe = '$mot_de_passe' WHERE id='$id' ";
 if(mysqli_query($connect, $query))
 {
  echo ' mis à jour  avec succès';
  
 }
$q = " UPDATE users SET name = '$name',
email = '$email',
telephone = '$telephone',
login = '$login',
mot_de_passe = '$mot_de_passe'
WHERE id='$user_id' ";
 if(mysqli_query($connect, $q))
 {
  echo ' mis à jour  avec succès';
  
 } 

?>
