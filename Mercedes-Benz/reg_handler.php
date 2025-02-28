<?php
$username = $_POST ["username"];
$email = $_POST ["email"];
$password = $_POST ["password"];

include "config.php";
$insertUser = "INSERT INTO users (username, email, password)
values ('$username', '$email', '$password')";
$result = mysqli_query ($con, $insertUser);
if ($result) {
header('location: login.php');
}
else {
echo "Error:" .mysqli_error($con);
 }
?>