<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$id = $_POST['delete_id'];


 $query = "DELETE FROM projets_nationaux WHERE id = '$id'";
 if(mysqli_query($connect, $query))
 {
  echo 'Enseignant a été supprimé avec succes';
 }
 

?>
?>