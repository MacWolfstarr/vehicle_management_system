<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>



<?php session_start();?>

<?php
    $href1="#";
    $href2="#";
    // if(!isset($_SESSION['role'])){
    $href1="login.php";
    $href2="register.php";
    
?>




<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <!-- Brand -->
 

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index2.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sell2.php">Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rent2.php">Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hire2.php">Hire</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="sent_requests.php">Sent Requests </a>
      </li>

  

    <!--  <li class="nav-item">
        <a class="nav-link" href="search_rent_adds.php">Search Rent Adds</a>
      </li> -->


    <!--    <li class="nav-item">
        <a class="nav-link" href="search_hire_adds.php">Search Hire Adds</a>
      </li>-->

      

        

      <!-- <li class="nav-item">
        <a class="nav-link" href="publishAdd.php">Publish Ad</a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="published_Adds_List.php">My Ads</a>
      </li> -->

     
      <!-- <li class="nav-item">
        <a class="nav-link" href="sent_requests.php">Sent Requests </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="recieved_requests.php">Received Requests</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="feedbacks.php"> Feedbacks</a>
      </li> -->

     
    </ul>






    <ul class="navbar-nav ml-auto">
            
            <!--  <h5 class="text-danger">Welcome <?php echo $_SESSION['user_id']?></h5> -->
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $href1;?>">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $href2;?>">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Sign Out</a>
            </li>

            <li class="nav-item">
            <h5 class="text-light bg-secondary" style="padding:5px;"> <?php echo $_SESSION['first_name']?></h5>
            </li>


         
        </ul>


  </div>
</nav> 

