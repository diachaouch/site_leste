<?php


$connect = mysqli_connect("localhost", "root", "", "sport");

 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $email = mysqli_real_escape_string($connect,$_POST["email"]);
 $telephone = mysqli_real_escape_string($connect,$_POST["telephone"]);

 $login =  mysqli_real_escape_string($connect,$_POST["login"]);
 $mot_de_passe = mysqli_real_escape_string($connect, $_POST["mot_de_passe"]);
$date_debut =  mysqli_real_escape_string($connect,$_POST["date_debut"]);
$date_fin =  mysqli_real_escape_string($connect,$_POST["date_fin"]);
$categorie = mysqli_real_escape_string($connect, $_POST["categorie"]);
 
 
 
$q1="select * from users WHERE (login='$login' AND mot_de_passe='$mot_de_passe') AND (email='$email') ";
 $log1=mysqli_query($connect, $q1);
 $rows1=mysqli_fetch_array($log1);
 $user_id= $rows1['id'];
 
 $q="select * from abonne WHERE (login='$login' AND mot_de_passe='$mot_de_passe')
 OR (email='$email') ";
  
  $log=mysqli_query($connect, $q);
  $rows=mysqli_num_rows($log);
	if($rows>0)
	{
	echo 'Gestionnaire déja inscrit ';	
	}
	else {
		$query = "INSERT INTO abonne (name,  email , telephone, login, mot_de_passe, date_debut , date_fin , user_id) VALUES(
'$name'  , '$email' , '$telephone'  , '$login', '$mot_de_passe' , '$date_debut' , '$date_debut' , '$user_id')";
          if(mysqli_query($connect, $query))
          {
          echo "Abonné ajoutè  avec succès";
  
           }
		   else{
			   echo "verifier les informations saisies";
		   }
	}
 
 


?>