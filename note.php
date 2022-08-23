<?php
//require_once 'home.php';
require_once 'member_db.php';
//require_once 'login.php';
session_start();
$account=$_SESSION['name'];
$notes=$_GET['note'];
//$time=date('Y-m-d H:i:s'); 
//echo $time;
$sql = "INSERT INTO Notes (account,notes) VALUES ('$account','$notes') ";
$result = mysqli_query($link,$sql);
header('location:home.php');
?>