
<?php
 session_start();
 
 ?>

<?php

$connect = mysqli_connect("localhost", "root", "", "leste");
$login= htmlspecialchars(trim(($_POST["login"])));
$mot_de_passe = htmlspecialchars(trim($_POST["mot_de_passe"]));

if(!empty($login) && !empty($mot_de_passe)) 
     {  
	
      $log=mysqli_query($connect,"SELECT * FROM users WHERE login='$login' AND mot_de_passe='$mot_de_passe'"); 
	  
      $rows=mysqli_num_rows($log);
             if($rows>0)
             {
				 $req=mysqli_fetch_assoc($log) or die (mysql_error());
             
			 $name=$req['name'];
			 $categorie=$req['categorie'];
			 $email=$req['email'];
			 $telephone=$req['telephone'];
			 
	             $_SESSION['Auth']=array('login'=>$login,'mot_de_passe'=>$mot_de_passe, 'name'=> $name, 
				 'email'=>$email, 'categorie'=>$categorie,'telephone'=>$telephone);
              
			  if($categorie==="gestionnaire"){
				  echo "<script type='text/javascript'>
		   window.location='gestionnaire/Gestionnaire.php';
</script>";
			  }
			  elseif($categorie==="abonné"){
				  echo "<script type='text/javascript'>
		   window.location='espace client/index.php';
</script>";
			  }
			  else{
				 echo "<script type='text/javascript'>
		   window.location='administrateur/administrateur.php';
</script>";
			  }

} 			  else{
				echo "<h5 class='text-danger'>Verifier le login et le mot de passe</h5> ";  
			  }
	 }
 ?>