<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
if(isset($_POST["name"] ))
{
$name =  $_POST["name"];
$q="select * from categorie WHERE (name='$name')" ;
$log=mysqli_query($connect, $q);
$rows=mysqli_num_rows($log);
 if($rows>0)
	{
	echo 'Cette catègorie existe déja';	
	 
	}
	else{
	$query = "INSERT INTO categorie (name) VALUES ('$name') ";
 if(mysqli_query($connect, $query))
 {
  echo 'Catègorie ajoutée';
 }	else{
	  echo $name; 
 }
	}	
	
	
	
 }	
	
	
 
 

?>