<?php
ob_start();
session_start();
session_destroy(); //เคลียร์ค่า session ทั้งหมด
header('location:login.php');
?>