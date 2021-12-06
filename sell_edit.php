

<?php session_start();?>

<?php 
 include ("./inc/config.php");


 $id = $_GET['id'];

?>

<?php
     

      if (!isset($_SESSION['user_email'] )) {
        header('Location:login.php');

      }//else if($_SESSION['role'] == 'admin'){
         // echo "Fobided!";
         // header('Location:sell_admin_panel.php');
     // }

    



?>


<?php
        if(isset($_POST['sell_edit'])){

          $vehicle_brand = $_POST['vehicle_brand'];
          $vehicle_model = $_POST['vehicle_model'];
          $model_year = $_POST['model_year'];
          $vehicle_number =$_POST['vehicle_number'];
          $seller_name =$_POST['seller_name'];
          $area = $_POST['area'];
          $description = $_POST['description'];
          $phone_number =$_POST['phone_number'];
          $email =$_POST['email'];
          $price =$_POST['price'];
          $engine_capacity = $_POST['engine_capacity'];
          $mileage = $_POST['mileage'];


          $sql = "UPDATE sell
                  SET
                  vehicle_brand='$vehicle_brand',
                  vehicle_model='$vehicle_model',
                  model_year ='$model_year',
                  vehicle_number='$vehicle_number',
                  seller_name = '$seller_name',
                  area ='$area',
                  description = '$description',
                  phone_number = '$phone_number',
                  email = '$email',
                  price = '$price'

                  WHERE sell_id = '$id';";




              if (mysqli_query($conn, $sql)) { 
                $msg ="Sell Add Edited Successfully!";
              } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                
                
              }



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
include  'header1.php'
?>










<?php
       // $sql = "SELECT * FROM sell where status='approved'";
        $sql = "SELECT * FROM sell where sell_id=$id ";

        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>




<div class="container ">
		
 		<!--Publish add section starts -->
	<div  class="tabPanel">



  <div class="edit">

  <div class="alert alert-primary alert-dismissible fade show col-sm-5 ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p><?php echo $msg ?></p>

  </div>

   

		

         <!--Sell form start-->   

		
		<form action="" method="post" enctype="multipart/form-data">

<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-4">
          <input type="text" name ="sell_id"  value="<?php echo $row['sell_id']?>" class="form-control" disabled>
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Brand</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_brand"  class="form-control"  value="<?php echo $row['vehicle_brand']?>" Required>
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Model</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_model" class="form-control" value="<?php echo $row['vehicle_model']?>" Required>
      </div>
    </div>

    
    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Model Year</label>
      <div class="col-sm-4">
      <input type="text" name ="model_year" class="form-control"  value="<?php echo $row['model_year']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Number</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_number" class="form-control" value="<?php echo $row['vehicle_number']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Seller Name</label>
      <div class="col-sm-4">
      <input type="text" name ="seller_name" class="form-control"  value="<?php echo $row['seller_name']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Area</label>
      <div class="col-sm-4">
      <input type="text" name ="area" class="form-control" value="<?php echo $row['area']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-4">
      <textarea  class="md-textarea form-control" rows="3"  name ="description"  Required><?php echo $row['description']?></textarea>
      </div>
    </div>
    




    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Phone number</label>
      <div class="col-sm-4">
      <input type="text" name ="phone_number"  class="form-control" value="<?php echo $row['phone_number']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-4">
      <input type="text" name ="email" class="form-control" value="<?php echo $row['email']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-4">
      <input type="text" name ="price" class="form-control" value="<?php echo $row['price']?>"Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Engine capacity</label>
      <div class="col-sm-4">
      <input type="text" name ="engine_capacity" class="form-control" value="<?php echo $row['engine_capacity']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Mileage</label>
      <div class="col-sm-4">
      <input type="text" name ="mileage" class="form-control" value="<?php echo $row['mileage']?>" Required>
      </div>
    </div>


   
  



  

  


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="sell_edit" value="Edit Add" class="btn btn-primary">
      </div>
    </div>

  
</form>




 

	
</div>				


        </div>
         <!--Sell form End-->  


         <?php
}
}else{
	echo "0 Result";
}
?>
	
	
	
</div>


</body>
</html>




<?php mysqli_close($conn); ?>




