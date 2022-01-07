<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$id = $_POST['delete_id'];


 $query = "DELETE FROM categorie WHERE id = '$id'";
 if(mysqli_query($connect, $query))
 {
  echo 'Catègorie a été supprimée';
 }

?>
