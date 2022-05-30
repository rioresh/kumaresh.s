<?php
include "db/connect.php";
session_start();
$name=$_GET['name'];
$number=$_GET['number'];
$dos=$_GET['dos'];
$doe=$_GET['doe'];
$rent=$_GET['rent'];
$loc=$_GET['loc'];
$status=$_GET['status'];
$ins="insert into book(customer_name,customer_mobile,dos,doe,final_rent,location,sts)values
                           ('$name','$number','$dos','$doe','$rent','$loc','$status')";
if(mysqli_query($con,$ins)){
    if($_SESSION['role']=="a"){
        header('location:../customer.php');
     }else{
        header('location:house.php');
      }
    }
else{  
    echo "Error:".mysqli_error($con);
    echo "<br/><hr/>";
    echo "<div class='gobac'><a href='../login.php'><input type='button' class='btn btn-danger' value='LOGIN'></a></div>";
}
?>
<a href="new.php"><button type="submit" class="btn btn-danger">GO BACK</button></a>