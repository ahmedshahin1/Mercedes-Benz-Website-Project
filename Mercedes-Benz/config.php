<?php
$con = mysqli_connect("localhost:3310", "root","") or die ("Error: Can't Connect to Server");
$db = mysqli_select_db($con, "project") or die ("Error: Can't Connect to Database");
?>