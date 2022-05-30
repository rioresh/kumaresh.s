    <?php
    include "db/connect.php";
    session_start();
    $em=$_GET['name'];
    $password=$_GET['pass'];
    $s="select * from login where name='$em'";
    if($res=mysqli_query($con,$s)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
                if(($password==$row['pass'])&&($em==$row['name'])){
                    $_SESSION['name']=$em;
                    $_SESSION['role']=$row['role'];      
                    if($_SESSION['role']=="c"){
                        header('location:controller/new.php');
                    } else if($_SESSION['role']=="o"){
                        header('location:controller/newowner.php');
                    }else if($_SESSION['role']=="a"){
                        header('location:transaction.php');
                    }else{
                        header('Location:login.php');
                    }      
                }       
            }mysqli_free_result($res);
        }else{
            echo "<h1>No match Found</h1>";
            echo"<a href='login.php'><button type='submit' class='btn btn-warning'>GOBACK</button></a>";
        }
    }else{
        echo "Error:".mysqli_error($con);
    } 
?>