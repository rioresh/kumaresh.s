<?php
include "db/connect.php";
$s="select * from login";
session_start();
$name=$_GET['name'];
$pass=$_GET['pass'];
$role=$_GET['role'];
$ins="insert into login(name,pass,role)values('$name','$pass','$role')";
if(mysqli_query($con,$ins)){
    header('Location:login.php');
    
}
?>