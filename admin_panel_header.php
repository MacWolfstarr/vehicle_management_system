<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>


   




<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="sell_admin_panel.php">Sell ads</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="rent_admin_panel.php">Rent adds</a>
      </li>
     

      <li class="nav-item">
        <a class="nav-link" href="hire_admin_panel.php">Hire adds</a>
      </li>

    
     
    </ul>






    <ul class="navbar-nav ml-auto">
            
            <!--  <h5 class="text-danger">Welcome <?php echo $_SESSION['user_id']?></h5> -->
         
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Sign Out</a>
            </li>

            <li class="nav-item">
            <h5 class="text-light bg-danger" style="padding:5px;"> <?php echo $_SESSION['user_email']?></h5>
            </li>


         
        </ul>


  </div>
</nav> 

