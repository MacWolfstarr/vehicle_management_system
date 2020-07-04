<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>



<?php session_start();?>

<?php
    $href1="#";
    $href2="#";
    if(!isset($_SESSION['role'])){
    $href1="login.php";
    $href2="register.php";
    }
?>




<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
 

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rent.php">Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hire.php">Hire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publishAdd.php">Publish Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Sent Requests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Received Requests</a>
      </li>
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
            <h5 class="text-light bg-secondary" style="padding:5px;"> <?php echo $_SESSION['user_email']?></h5>
            </li>


         
        </ul>


  </div>
</nav> 

