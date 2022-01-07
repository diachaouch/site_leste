<?php
$connect = mysqli_connect("localhost", "root", "", "leste");
$id = $_POST['delete_id'];


 $query = "DELETE FROM grade WHERE id = '$id'";
 if(mysqli_query($connect, $query))
 {
  echo 'Grade a été supprimée';
 }

?>
