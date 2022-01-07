<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
if(isset($_POST["name"] ))
{
$name =  $_POST["name"];
$q="select * from grade WHERE (name='$name')" ;
$log=mysqli_query($connect, $q);
$rows=mysqli_num_rows($log);
 if($rows>0)
	{
	echo 'Cette grade existe déja';	
	 
	}
	else{
	$query = "INSERT INTO grade (name) VALUES ('$name') ";
 if(mysqli_query($connect, $query))
 {
  echo 'grade ajouté';
 }	else{
	  echo $name; 
 }
	}	
	
	
	
 }	
	
	
 
 

?>