<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$id = $_POST['id'];
$articles = $_POST['articles'];
$membres = $_POST['membres'];
$habilitations_soutenues= $_POST['habilitations_soutenues'];
$theses_soutenues = $_POST['theses_soutenues'];
$mastere = $_POST['mastere'];
$congres = $_POST['congres'];
$corps_A = $_POST['corps_A'];
$corps_B = $_POST['corps_B'];
$doctorant = $_POST['doctorant'];
$Staff_technique = $_POST['Staff_technique'];


$query = " UPDATE chiffre_labo SET articles = '$articles'  , membres = '$membres'  , habilitations_soutenues = '$habilitations_soutenues'  , theses_soutenues = '$theses_soutenues'  , mastere = '$mastere'  , congres = '$congres'  , corps_A = '$corps_A'  , corps_B = '$corps_B'  , doctorant = '$doctorant'  , Staff_technique = '$Staff_technique' 
 WHERE id='$id' ";
 if(mysqli_query($connect, $query))
 {
  echo ' mis à jour  avec succès';
	 mysqli_close($connect);
  
 }



?>
