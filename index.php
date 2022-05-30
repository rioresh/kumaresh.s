<?php
    include "db/connect.php";
    session_start();
    if(isset($_SESSION['name'])){
        
        ?>
     <?php 
     echo "<h3>Welcome,".$_SESSION['name']."</h3>";
     $em=$_GET['name'];
     $password=$_GET['pass'];
     $s="select * from login where name='$em'";
     if($res=mysqli_query($con,$s)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
                if ($password==$row['pass']) {
                    $_SESSION['name']=$em;
                    $_SESSION['role']=$row['role'];    
                }              
            }mysqli_free_result($res);
        }else{
            echo "No match Found";
        }
     }else{
        echo "Error:".mysqli_error($con);
     }
    
     if($_SESSION['role']=="customer"){
        header("location:customer.php");
     }
     elseif($_SESSION['role']=="owner"){
        header("location:owner.php");
     }else{
        header("location:transaction.php");
     }
    ?>
    <?php
    }?>