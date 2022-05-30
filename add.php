<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
<div class="card shadow-lg" style="margin-left:25%;width:50%;margin-top:5%;">
<form name="myform" onsubmit="return validate()"  action="addnew.php" method="get">
        <div class="container text-center">
            <div class="row">
                <div class="col"><h5>ENTER YOUR NAME</h5></div>
            </div>
            <div class="row">
                <div class="col" ><input type="text" name="name"></div>
            </div>
            <div class="row">    
                <div class="col"><span id='1' style="color:red;"></span></div>
            </div>
            <div class="row">    
               <div class="col"><h5>ENTER YOUR NUMBER</h5></div>
            </div>
            <div class="row">
               <div class="col"><input type="number" name="number" min="10"></div>
            </div>
            <div class="row">
                <div class="col"><span id='2' style="color:red;"></span></div>
            </div>
            <div class="row">
                <div class="col"><h5>ENTER YOUR PARMANENT ADDRESS</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="add"></div>
            </div>
            <div class="row">
                <div class="col"><span id='3' style="color:red;"></span></div>
            </div>
            <div class="row">
                <div class="col"><h5>ENTER YOUR STATUS</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="status"></div>
            </div>
            <div class="row">
                <div class="col"><span id='4' style="color:red;"></span></div>
            </div>
            <div class="row">
                <div class="col"><h5>ENTER YOUR LOCATION</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="loc"></div>
            </div>
            <div class="row">
                    <div class="col"><span id='5' style="color:red;"></span></div>
            </div>
            <div class="row">
                <div class="col"><h5>ENTER YOUR DATE OF BIRTH</h5></div>
            </div>
            <div class="row">
                <div class="col"><input type="date" name="dob"></div>
            </div>
            <div class="row">
                    <div class="col"><span id='6' style="color:red;"></span></div>
            </div>
            <div class="row">
                <div class="col"><h5>CHOOSE YOUR ROLE</h5><h6>(CUSTOMER='C'|&nbsp;OWNER='O')</h6></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="role"></div>
           </div>
            <div class="row">
                <div class="col"><span id='7' style="color:red;"></span></div>
           </div>
           <div class="row">
               <div class="col"><h5>SEE YOUR PASSWORD</h5></div>
           </div>
                <div class="col"><input type="text" name="pass" value="<?php   $comb = '1234567890';$pass=str_shuffle($comb);$pass=substr($comb,1,5); echo$pass;?>"></div>
            </div>
            <div class="row">
                <a href="side.php"><button type="submit" class="btn btn-primary" style="width:100%;">ADD</button></a>
            </div>   
        </div>
    </form><a href="login.php"><button type="submit" class="btn btn-danger" style="width:8%;">BACK</button></a>
</div>
<script>
    function validate(){
    var i1=document.myform.name.value;
    var i2=document.myform.number.value;
    var i3=document.myform.add.value;
    var i4=document.myform.status.value;
    var i5=document.myform.loc.value;
    var i6=document.myform.dob.value;
    var i7=document.myform.role.value;
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
        document.getElementById("5").innerHTML="*This LOCATION is required";
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
    }return true;
    }
</script>
</body>
</html>