<?php
$email=$_POST["email"];
$password=$_POST["password"];
 
include "config.php";
 
$Login = "SELECT email, password FROM users WHERE email='$email' and password='$password'";
 
$result = mysqli_query($con, $Login);
$count = mysqli_num_rows($result);
 
if($count == 1){
	header('location: home.php');
}else{
	echo "Error";
}
?>