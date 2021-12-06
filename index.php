<?php session_start();?>

<?php 
 include ("./inc/config.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle HUB</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    



</head>
<body>

<?php
include  'header.php'
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/car.jpg" alt="First slide" width="1000" height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>Sell Your Car</h5>
    <p>Over 10Million+ Active Buyers Online</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/car1.jpg" alt="Second slide" width="1000" height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>Rent Your Car</h5>
    <p>Over 1Million+ Customers Are Wating</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/car2.jpg" alt="Third slide" width="1000" height="500">
      <div class="carousel-caption d-none d-md-block">
    <h5>SelHirel Your Car</h5>
    <p>Over 10Million+ Active Customers Online</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<span class="border border-danger">
<h1 style="text-align:center" > Who We Are</h1>

<p style="text-align:center" >It's getting easier to shop for a new car again now that dealerships across the United States are starting to open up following the coronavirus lockdowns. But don't go shopping with your heart set on anything specific. It's going to be harder to find the exact car, truck or SUV of your dreams.</p>
</span>
<div class="card"style="width: 430px; height: 300px;   float:left; margin-left:20px; margin-right:50px; margin-top:40px; background:#bfdfc2;  border-style: solid;  "">
  <img class="card-img-top" src="images/sell.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Sell</h5>
    <p class="card-text">Tired of driving your old vehicle? Sell right now for the price you desire. </p>
    
    <a href="sell.php" class="card-link">CLICK HERE</a>
    
  
  </div>
 
 
</div>
<div class="card"style="width: 430px; height: 300px;   float:left; margin-left:40px; margin-right:50px; margin-top:40px; background:#bfdfc2;  border-style: solid;  "">
  <img class="card-img-top" src="images/rent.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Rent</h5>
    <p class="card-text"> Lets earn some money from your vehicle for the price you deserve.</p>
    <a href="rent.php" class="card-link">CLICK HERE</a>
  </div>
  
  
   
    
 
</div>
<div class="card"style="width: 430px; height: 300px;   float:left; margin-left:34px; margin-right:20px; margin-top:40px; background:#bfdfc2;  border-style: solid;  "">
  <img class="card-img-top" src="images/hire.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Hire</h5>
    <p class="card-text">Wannted to travel around with family? Hire your vehicle right now. </p>
    <a href="hire.php" class="card-link">CLICK HERE</a>
  </div>
  
  
    
  
  
</div>


<!--###################################################################sellllllllllllllllllllll######################################-->

<!--#################################################################################################################################-->
</body>
</html>

<?php mysqli_close($conn); ?>