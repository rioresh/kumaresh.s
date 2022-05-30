<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    <title>Dashboard</title><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">  
<style>body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
    margin-left:40mm;
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
    margin-left:40mm;
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}</style></head>
<body> 
    <?php
    include "db/connect.php";
    session_start();
    if(isset($_SESSION['name'])){?>
                
                    
                    <nav class="navbar shadow-lg bg-secondary">
  <div class="container-fluid">
    <ul class="nav">
      <li class="nav-link">
        <a href="#" style="margin-left:140mm;" class="nav-link text-light"><h4>Home</h4></a>
      </li>
      <li class="nav-link text-danger">
        <a href="customer.php"class="nav-link text-light"><h4>customer View</h4></a>
      </li>
      <li class="nav-link">
        <a href="owner.php"class="nav-link text-light"><h4>owner View</h4></a>
      </li>
      <li class="nav-link">
        <a href="controller/conform.php"class="nav-link text-light"><h4>over view</h4></a>
      </li>
       <li class="nav-link">
       <a href="login.php"class="nav-link text-light"><h4>logout</h4></a>
       </li>
    </ul>
  </div>
</nav> <br>        
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20"><p>Total Number Of customers:</p><?php 
                include 'db/connect.php';
                $sql="select count(*) as total from customer";
                if($result=mysqli_query($con,$sql)){
                if($row=mysqli_fetch_assoc($result)){
                echo "<h1 style='color: blue;'>".$row['total']."</h1>";
                }
                }
                ?></h5></h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span></span></h2>
                    <p class="m-b-0"><span class="f-right"></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20"> <p>Total Number Of owners:</p><?php
              include 'db/connect.php';
               $sql="select count(*) as total from owner";
              if($result=mysqli_query($con,$sql)){
              if($row=mysqli_fetch_assoc($result)){
              echo "<h1 style='color: blue;'>".$row['total']."</h1>";
               }
              }
               ?>  </h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span></span></h2>
                    <p class="m-b-0"><span class="f-right"></span></p>
                </div>
            </div>
        </div>
        </div> 
</body>
</html> <?php }else{
    echo "Login to See details";
    echo "<a href='login.php'>Click Here</a>";
    echo "</body>";
    echo "</html>";
} 
?>