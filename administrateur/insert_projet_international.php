<?php


$connect = mysqli_connect("localhost", "root", "", "leste");

 $type = mysqli_real_escape_string($connect, $_POST["type"]);
 $duree = mysqli_real_escape_string($connect,$_POST["duree"]);
 $titre = mysqli_real_escape_string($connect,$_POST["titre"]);
 $responsable_tunisien =  mysqli_real_escape_string($connect,$_POST["responsable_tunisien"]);
 $responsable_francais = mysqli_real_escape_string($connect, $_POST["responsable_francais"]);
 $description = mysqli_real_escape_string($connect, $_POST["description"]);
 
  $q="select * from projets_internationaux WHERE (type='$type' AND duree='$duree') AND (titre='$titre') AND (responsable_tunisien='$responsable_tunisien') AND (responsable_francais='$responsable_francais') ";

  $log=mysqli_query($connect, $q);
  $rows=mysqli_num_rows($log);
	if($rows>0)
	{
	echo 'Projet déja inscrit ';	
	}
	else {
		$query = "INSERT INTO projets_internationaux (type,  duree , titre, responsable_tunisien, responsable_francais, description) VALUES(
'$type'  , '$duree' , '$titre'  , '$responsable_tunisien', '$responsable_francais', '$description')";
          if(mysqli_query($connect, $query))
          {
          echo "Projet ajoutè  avec succès";
  
           }
		   else{
			   echo "verifier les informations saisies";
		   }
	}
 
 


?>