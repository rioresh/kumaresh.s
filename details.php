<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
</head>
<body>
    <div class="container">
    <a href="controller/new.php"><button type="submit" class="btn btn-warning">GOBACK</button></a>
<form onsubmit="return validate()" name="myform" action="controller/check.php" method="get">
    <div class="card " style="card bg-shadow;width:35%;margin-left:25%;height: 350px;font-size: 22px;margin-top: 100px;"><h3>WELCOME TO BOOK PAGE</h3><br>
          <div class="row">
                <div class="col"><label><h5>ENTER YOUR TRANSACTION_ID</h5></label></div>
           </div>
           <div class="row">
                <div class="col"><input type="text" name="tran_id" style="width:100%;"></div>
           </div>
           <div clas="row">
           <div class="col"><span id='1' style="color:red;"></span></div>
           </div><br>
           <div class="row">
                <div class="col"><label><h5>ENTER YOUR NAME</h5></label></div>
           </div>
           <div class="row">
                <div class="col"><input type="text" name="name" style="width:100%;"></div>
           </div>
           <div clas="row">
           <div class="col"><span id='2' style="color:red;"></span></div>
           </div><br><br>
           <div class="row">
               <div class="col">
                    <button type="submit" class="btn btn-primary" style="width:100%;">
                       LOG-IN
                    </button> </div>                   
            </div>      
    </div> 
</form> 
    </div>
    <script>
    function validate(){
    var i1=document.myform.tran_id.value;
    var i2=document.myform.name.value;
    if(i1==""){
        document.getElementById("1").innerHTML="*This ID is required";
        return false;
    }else{
        document.getElementById("1").innerHTML="  ";
    }
    if(i2==""){
        document.getElementById("2").innerHTML="*This NAME is required";
        return false;
    }else{
        document.getElementById("2").innerHTML="  ";
    }
    }
</script>

</body>
</html>