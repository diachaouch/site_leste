<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
if(isset($_POST["name"] ))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 
 $email = $_POST["email"];
 $telephone = mysqli_real_escape_string($connect,$_POST["telephone"]);
 $etablissement = mysqli_real_escape_string($connect,$_POST["etablissement"]);
 
 
 $login =  mysqli_real_escape_string($connect,$_POST["login"]);
 $mot_de_passe = mysqli_real_escape_string($connect, $_POST["mot_de_passe"]);
 $id_grade = mysqli_real_escape_string($connect,$_POST["id_grade"]);
 $id_categorie = mysqli_real_escape_string($connect,$_POST["id_categorie"]);
 $q="select * from users WHERE (login='$login' AND mot_de_passe='$mot_de_passe') ";
  
  $log=mysqli_query($connect, $q);
  $rows=mysqli_num_rows($log);
 if($rows>0)
	{
	echo 'Vous étes déja inscrit';	
	}else{
	$query = "INSERT INTO users (name, email, telephone, etablissement, login, mot_de_passe, id_grade, id_categorie) VALUES('$name',  '$email' , '$telephone' , '$etablissement' , '$login' , '$mot_de_passe' , '$id_grade' , '$id_categorie')";
 if(mysqli_query($connect, $query))
 {
  echo 'utilisateur ajouté';
 }	
	}
	
 
 
}
?>