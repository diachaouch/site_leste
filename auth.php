<?php
class Auth {
public static function isLogged(){
		if(isset($_SESSION['Auth'])&&isset($_SESSION['Auth']['login'])&&isset($_SESSION['Auth']['mot_de_passe'])){
			extract($_SESSION['Auth']);
			$connect = mysqli_connect("localhost", "root", "", "leste");
$log=mysqli_query($connect,"SELECT * FROM users WHERE login='$login' AND mot_de_passe='$mot_de_passe'");   
 
$rows=mysqli_num_rows($log);
if ($rows>0){
	return true;
	}
	else{
	return false;
	}
		}
		else{
			return false;	
			}
		}
	
	}

?>