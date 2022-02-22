<?php
$servername = "localhost";  //Hosting
$username = "root"; //User Databass
$password = "";  //User Password
$dbname = "workshop_php";  //Database Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Change character set to utf8
$conn -> set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "ยินดีด้วยเข้าถึงฐานข้อมูลแล้ว!";
}

?>