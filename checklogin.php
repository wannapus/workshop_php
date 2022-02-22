<?php
ob_start();
session_start();
include("connection/config.inc.php");
$txt_username = $_POST['txt_username'];
$txt_password = $_POST['txt_password'];

$sql = "SELECT * FROM tbl_member WHERE username = '$txt_username'"; //คำสั่งตึงข้อมูลจากฐานข้อมูล
$objQuery = mysqli_query($conn, $sql); //สั่งให้ $conn, $sql ทำงาน
$obJResult = mysqli_fetch_array($objQuery); 

if($objQuery){
    $_SESSION['sess_username'] = $obJResult['username'];
    $_SESSION['sess_fullname'] = $obJResult['fullname'];
    header('location: index.php');
}else{
    header('location: login.php');
}
?>