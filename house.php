<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
</head>
<body>
<?php
    include "db/connect.php";
    session_start();
    if(isset($_SESSION['name'])){?>
    <table class="table" style="table table-light">
        <tr><th>TRANSACTION-ID</th>
        <th>CUSTOMER NAME</th>
        <th>CUSTOMER-NUMBER</th>
        <th>DATE OF START</th>
        <th>DATE OF END</th>
        <th>EXPECTED RENT</th>
        <th>LOCATION</th>
        <th>STATUS</th>
        <TH>SEARCH</TH>
</tr>
<?php
include "db/connect.php";

$name=$_SESSION['name'];
                
$sql="select * from book";
$i=1;      
if($res=mysqli_query($con,$sql)){
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
            $_SESSION['location']=$row['location'];
            echo"<tr><td>".$row['tran_id']."</td>";
            echo"<td>".$row['customer_name']."</td>";
            echo"<td>".$row['customer_mobile']."</td>";
            echo"<td>".$row['dos']."</td>";
            echo"<td>".$row['doe']."</td>";
            echo"<td>".$row['final_rent']."</td>";
            echo"<td>".$row['location']."</td>";
            echo"<td>".$row['sts']."</td>";
            echo"<td><button type='submit' class='btn btn-primary;'><a href='controller/home.php?view=".$_SESSION['location']."'>GO</a></btuuon></td>";
            echo"<tr>";
        }mysqli_free_result($res);
    }else{
        echo "No match Found";
    }
}else{
    echo "Error:".mysqli_error($con);
 }
?></table>
</body>
</html>
<?php }else{
    echo "Login to See details";
    echo "<a href='login.php'>Click Here</a>";
    echo "</body>";
    echo "</html>";
} 
?>
