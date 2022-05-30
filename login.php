<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <div class="card shadow-lg" style="width: 30%;margin-left: 35%; border-radius:15px; height: 424px;font-size: 22px;margin-top: 100px;"><h2 class="text-center"><br>LOG&nbsp;&nbsp;IN</h2><br>
         <div class="container bg-shadow text-center">
         <form onsubmit="return validate()" name="myform" action="logincheck.php" method="get">
               <div class="row">
                   <div class="col"><h3>NAME</h3></div>
                </div>
                <div class="row">
                   <div class="col"><input type="text" name="name"></div>
                </div>
                <div class="row">
                   <div class="col"><span id='1' style="color:red;"></span></div>
               </div><br>
               <div class="row">
                   <div class="col"><h3>PASSWORD</h3></div>
                </div>
                <div class="row">
                   <div class="col"><input type="password" name="pass"></div>
                </div>
                <div class="row">
                   <div class="col"><span id='2' style="color:red;"></span></div>
                </div><br>
                 <div class="row">
                    <button type="submit" class="btn btn-primary" style="width:100%;">
                       LOG-IN
                    </button>                    
               </div>  
            </form>    
            <a href="add.php"><button type="submit" class="btn btn-success" style="width:105%;margin-left:-2.5%;">CREATE NEW</button></a>
        </div>
    </div>    
<script>
    function validate(){
    var i1=document.myform.name.value;
    var i2=document.myform.pass.value;
    if(i1==""){
        document.getElementById("1").innerHTML="*This NAME is required";
        return false;
    }else{
        document.getElementById("1").innerHTML="  ";
    }
    if(i2==""){
        document.getElementById("2").innerHTML="*This PASSWORD is required";
        return false;
    }else{
        document.getElementById("2").innerHTML="  ";
    }
    }
</script>

</body>
</html>