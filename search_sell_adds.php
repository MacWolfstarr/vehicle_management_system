

<?php session_start();?>

<?php 
 include ("./inc/config.php");
?>

<?php
     

      if (!isset($_SESSION['user_email'] )) {
        header('Location:login.php');

      }else if($_SESSION['role'] == 'admin'){
          echo "Fobided!";
          header('Location:sell_admin_panel.php');

      }

  
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/publishAdd.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
   
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/publishAddSection.js"></script>

</head>
<body>



<?php
include  'header.php'
?>









<div class="container ">
		
 		<!--Publish add section starts -->
	<div  class="tabPanel">

<form method="post">

  <div class="input-group">

  <input type="text" class="form-control" name="search_Brand" placeholder="Search By Brand"  >
  <input type="text" class="form-control" name="search_Model"  placeholder="Search By Model" >
  <span class="input-group-btn">
  <input type="submit" class="form-control btn-info"  value="Search" name="search">
  </span>
  </div>

</form>



      <?php

        if(isset($_POST['search'])){

               
                $search_Brand = $_POST['search_Brand'];
                $search_Model = $_POST['search_Model'];

              

                  $sql = "SELECT * FROM sell  where  ";
                  
                  if($search_Brand !="") {
                    $sql .= "  vehicle_brand  Like '{$search_Brand}%'";
                  }
                  if($search_Model !="") {
                    $sql .= "  vehicle_model  Like '{$search_Model}%'";
                  }



                  $result =$conn ->query($sql);

                  if($result->num_rows > 0){
                  while ($row =$result ->fetch_assoc())
                  {

     ?>


                              <div class="card  border-primary mb-3  " style="max-width:400px;  height:auto;  ">

                              <div class="card-header">  
                              <h5 class="card-title text-info" style="font-weight: bold;"><?php echo $row["vehicle_Brand"]  ." ". $row["vehicle_model"] ." ".$row["vehicle_number"];?> </h5><h6 class="text-success">For Rent</h6>
                              </div>
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                    <img src="./<?php echo $row["img_path"];?>" class="card-img" alt="..." >
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                    
                                      
                                      <p>RS. <?php echo $row["price"];?>  per Day</p>
                                      <p>Location:  <?php echo $row["area"] ?> </p>
                                  
                                    </div>
                                  </div>
                                </div>

                                <div class="card-footer bg-transparent border-primary">    
                                <a href="rent_view_description.php?rent_id=<?php echo $row['rent_id'];?>"><input type="submit" name="sumbit_sell" value="View Description" class="btn btn-primary"></a>
                                </div>
                              </div>





 
<?php
                  }
                }else{
                  echo "0 Result";
                }
                




        }
      
      
      
      
      ?>










 
	
	
	
	</div>
	<!--publish add section End-->
	
	
</div>


</body>
</html>




<?php mysqli_close($conn); ?>




