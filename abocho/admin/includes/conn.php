<?php
$servername="localhost";
$username="root";
$password="";
$db="abocho";

$conn = new mysqli($servername,$username,$password,$db);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";
?>