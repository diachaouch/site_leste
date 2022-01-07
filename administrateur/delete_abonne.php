<?php
$connect = mysqli_connect("localhost", "root", "", "sport");
$id = $_POST['delete_id'];
$user_id = $_POST['user_id'];

 $query = "DELETE FROM adonne WHERE id = '$id'";
 if(mysqli_query($connect, $query))
 {
  echo 'Enseignant a été supprimé avec succes';
 }
 
$query2 = "DELETE FROM users WHERE id = '$user_id'";
 if(mysqli_query($connect, $query2))
 {
  echo 'user a été supprimé avec succes';
 }
?>
?>