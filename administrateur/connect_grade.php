<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$id = $_POST['id'];
$name = $_POST['name'];


$query = " UPDATE grade SET name = '$name'
 WHERE id='$id' ";
 if(mysqli_query($connect, $query))
 {
  echo ' mis à jour  avec succès';
	 mysqli_close($connect);
  
 }



?>
