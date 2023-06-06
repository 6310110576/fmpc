<?php 
$host = "192.168.2.224";
$username = "foodmachin_2019";
$password = "twe31219#";
$database = "foodmachin_2019";

// Create connection
$conn = mysqli_connect($host, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 
// echo"Connected successfully"

?>