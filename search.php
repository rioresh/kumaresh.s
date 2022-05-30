<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    include "db/connect.php";
    session_start();
    if(isset($_SESSION['name'])){?>
    <?php
    include "db/connect.php";
    $id=$_GET['id'];
    $select="select * from customer where customer_id='$id'";
if($res=mysqli_query($con,$select)){
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
            $a=$row['customer_name']; 
            $b=$row['customer_mobile'];
        }mysqli_free_result($res);
    }else{
        echo "No Records Found";
    }
}else{
    echo "Error:".mysqli_error($con);
}
    ?>
<div class="card shadow-lg" style="margin-left:20%;margin-top:40px;width:50%"><br>
    <form name="myform" onsubmit="return validate()" action="search2.php" method="get">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Book Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col"><h5>ENTER YOUR NAME</h5></div> 
            </div> 
            <div class="row">
                <div class="col"><input type="text" name="name" style="width:100%;" value="<?php echo$a;?>"></div>
            </div> 
            <div class="row">
                <div class="col"><span id='1' style="color:red;"></span></div>
            </div>                             

            <div class="row">    
               <div class="col"><h5>ENTER YOUR NUMBER</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="number" name="number" min="10" style="width:100%;"value="<?php echo$b;?>"></div>
            </div>
                
            <div class="row">
                <div class="col"><span id='2' style="color:red;"></span></div>
            </div>
            <div class="row">    
               <div class="col"><h5>ENTER YOUR DATE OF START</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="date" name="dos" style="width:100%;"></div>
            </div>
                
            <div class="row">
                <div class="col"><span id='3' style="color:red;"></span></div>
            </div>
            <div class="row">    
               <div class="col"><h5>ENTER YOUR DATE OF END</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="date" name="doe" style="width:100%;"></div>
            </div>
                
            <div class="row">
                <div class="col"><span id='4' style="color:red;"></span></div>
            </div>
            <div class="row">    
               <div class="col"><h5>ENTER YOUR EXPECTED RENT</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="rent" style="width:100%;"></div>
            </div>
                
            <div class="row">
                <div class="col"><span id='5' style="color:red;"></span></div>
            </div>            
            <div class="row">
                <div class="col"><h5>CHOOSE YOUR LOCATION</h5></div>
            </div>
            <div class="row">
                <div class="col" ><select name='loc'>
                    <option value="0" ></option><?php
include "db/connect.php";

$select="select * from owner";
      
if($res=mysqli_query($con,$select)){
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
            
            
            echo"<option >".$row['location']."</option>";
           
        }mysqli_free_result($res);
    }else{
        echo "No Records Found";
    }
}else{
    echo "Error:".mysqli_error($con);
}
?></select></div>
            </div>
            <div class="row">
                <div class="col"><span id='6' style="color:red;"></span></div>
            </div><br>
            <div class="row">    
               <div class="col"><h5>ENTER YOUR STATUS</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="status" style="width:100%;"></div>
            </div>
                
            <div class="row">
                <div class="col"><span id='7' style="color:red;"></span></div>
            </div><br>     
            <div class="row">
                <div class="col">
                <a href="side.php"><button type="submit" class="btn btn-primary" style="width:100%;">ADD</button></a>
                </div>
            </div>             
        </div>
    </form><br>
</div><br> 
<script>
    function validate(){
    var i1=document.myform.name.value;
    var i2=document.myform.number.value;
    var i3=document.myform.dos.value;
    var i4=document.myform.doe.value;
    var i5=document.myform.rent.value;
    var i6=document.myform.loc.value;
    var i7=document.myform.status.value;
    if(i1==""){
        document.getElementById("1").innerHTML="This NAME is required";
        return false;
    }else{
        document.getElementById("1").innerHTML="  ";
    }
    if(i2==""){
        document.getElementById("2").innerHTML="This NUMBER is required";
        return false;
    }else{
        document.getElementById("2").innerHTML="  ";
    }
    if(i3==""){
        document.getElementById("3").innerHTML="*This ADDRESS is required";
        return false;
    }else{
        document.getElementById("3").innerHTML="  ";
    }
    if(i4==""){
        document.getElementById("4").innerHTML="*This STATUS is required";
        return false;
    }else{
        document.getElementById("4").innerHTML="  ";
    }
    if(i5==""){
        document.getElementById("5").innerHTML="*This SEARCH LOCATION is required";
        return false;
    }else{
        document.getElementById("5").innerHTML="  ";
    }
    if(i6==""){
        document.getElementById("6").innerHTML="*This DATE OF BIRTH is required";
        return false;
    }else{
        document.getElementById("6").innerHTML="  ";
    }
    if(i7==""){
        document.getElementById("7").innerHTML="*This PREFRENCE is required";
        return false;
    }else{
        document.getElementById("7").innerHTML="  ";
    }
    }
</script>
<a href="controller/new.php"><button type="submit" class="btn btn-danger">GO BACK</button></a>
<a href="logout.php"><button type="submit" class="btn btn-warning">LOGOUT</button></a>
<a href="details.php"><button type="submit"  class="btn btn-success" >ALREADY BOOKED</button></a> 
</body>
</html>
<?php }else{
    echo "Login to See details";
    echo "<a href='login.php'>Click Here</a>";
    echo "</body>";
    echo "</html>";
} 
?>
