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

<a href="logout.php" style="margin-left:90%"><input type="button" class="btn btn-info" value="Logout"></a>
    <a href="controller/addcustomer.php"><button class="btn btn-warning">ADD CUSTOMER</button></a>
    <div calss="card shadow-lg" style="width:79%;margin-left:15%;margin-top:8%;">
<table class="table bg-shadow">
    <tr>
        <th>S.NO</th>
        <th>CUSTOMER-ID</th>
        <TH>CUSTOMER-NAME</TH>
        <TH>CUSTOMER-NUMBER</TH>
        <TH>CUSTOMER-PARMANENT-ADDRESS</TH>
        <TH>CUSTOMER-STATUS</TH>
        <TH>LOCATION</TH>
        <TH>DATE-OF-BIRTH</TH>
        <th colspan='3'>ACTION</th>
    </tr>
<?php
include "db/connect.php";

$select="select * from customer";
$i=1;      
if($res=mysqli_query($con,$select)){
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
            echo"<tr><td>".$i."</td>";
            echo "<td>".$row['customer_id']."</td>";
            echo "<td>".$row['customer_name']."</td>"; 
            echo "<td>".$row['customer_mobile']."</td>";
            echo"<td>".$row['parmanent_address']."</td>";
            echo"<td>".$row['customer_status']."</td>";
            echo"<td>".$row['location']."</td>";
            echo"<td>".$row['dob']."</td>";
if($_SESSION['role']=="a"){
                 echo"<td><a href='controller/deletecustomer.php?del=".$row['customer_id']."'onclick='return confirm(\"do you want to delete the owner record?\")'><i class='fa fa-trash'></i></a></td>";
            }
            echo"<td><a href='controller/customerinsert.php?upd=".$row['customer_id']."'><i class='fa fa-edit'></i></a></td>";
            echo"<td><a href='controller/viewcustomer.php?view=".$row['customer_id']."'><i class='fa fa-eye'></i></a></td>";
            echo"</tr>";
            $i=$i+1;
        }mysqli_free_result($res);
    }else{
        echo "No Records Found";
    }
}else{
    echo "Error:".mysqli_error($con);
}
?></table>
<a href="transaction.php"><button type="submit" class="btn btn-danger">GOBACK</button></a>
</div></body>
</html>
<?php }else{
    echo "Login to See details";
    echo "<a href='login.php'>Click Here</a>";
    echo "</body>";
    echo "</html>";
} 
?>
