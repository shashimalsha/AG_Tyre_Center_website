<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db="customers";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
?>