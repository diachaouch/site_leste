<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
if(isset($_POST['name'])){
$id = $_POST['id'];
$name = $_POST["name"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$login = $_POST["login"];
$mot_de_passe = $_POST["mot_de_passe"];

$query = "UPDATE abonne SET 
name = '$name', 
email = '$email',
telephone = '$telephone',
login = '$login',
password = '$mot_de_passe'
where id='$id'
 ";
 if(mysqli_query($connect, $query))
 {
  echo 'patient mis à jour  avec succès';
  
 }
 
}
?>
