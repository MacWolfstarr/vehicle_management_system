

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


<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if(isset($_POST['sumbit_sell']) ){  //Sell add start

    $publisher =$_SESSION['user_email'];
    $vehicle_model =$_POST['vehicle_model'];
    $vehicle_number=$_POST['vehicle_number'];
    $seller_name =$_POST['seller_name'];
    $phone_number =$_POST['phone_number'];
    $email = $_POST['email'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $status = "pending";
    $add_type ="sell";

    $vehicle_brand = $_POST['vehicle_brand'];
    $engine_capacity =$_POST['engine_capacity'];
    $model_year = $_POST['model_year'];
    $mileage = $_POST['mileage'];
    $area = $_POST['area'];

        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);
        $v3 = $v1.$v2;
        $fnm =$_FILES["img_path"]["name"];  
        $dst ="./vehicle_images/".$v3.$fnm;
        $dst1 ="vehicle_images/".$v3.$fnm;      
        move_uploaded_file($_FILES["img_path"]["tmp_name"],$dst);

        $sql = "INSERT INTO `sell` ( `publisher`, `vehicle_model` ,`vehicle_number`,`seller_name`,`phone_number`,`email`,`price`,`description`,`img_path`,`status` ,`vehicle_brand`,`engine_capacity`,`model_year`,`mileage`,`area`,`add_type`)
        VALUES ( '$publisher','$vehicle_model','$vehicle_number','$seller_name','$phone_number',' $email',' $price','$description','$dst1','$status','$vehicle_brand','$engine_capacity','$model_year','$mileage','$area','$add_type')";
        
      
        if (mysqli_query($conn, $sql)) { 
            $msg ="Sell Add is Pending for Aproval";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            
            
        }


        
    }else if(isset($_POST['sumbit_rent'])){    //rent add starts

      $publisher =$_SESSION['user_email'];
        $vehicle_Brand = $_POST['vehicle_Brand'];
        $vehicle_model = $_POST['vehicle_model'];
        $vehicle_number = $_POST['vehicle_number'];
        $owner_name = $_POST['owner_name'];
        $owner_phone_number = $_POST['owner_phone_number'];
        $owner_email = $_POST['owner_email'];
        $price =$_POST['price'];
        $description =$_POST['description'];
        $area = $_POST['area'];
        $status = "pending";
        $add_type = "rent";

        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);
        $v3 = $v1.$v2;
        $fnm =$_FILES["img_path"]["name"];  
        $dst ="./vehicle_images/".$v3.$fnm;
        $dst1 ="vehicle_images/".$v3.$fnm;      
        move_uploaded_file($_FILES["img_path"]["tmp_name"],$dst);


        $sql = "INSERT INTO `rent` ( `publisher`, `vehicle_Brand` ,`vehicle_model`,`vehicle_number`,`owner_name`,`owner_phone_number`,`owner_email`,`price`,`description`,`area` ,`status`,`img_path`,`add_type`)
        VALUES ( '$publisher','$vehicle_Brand','$vehicle_model','$vehicle_number','$owner_name',' $owner_phone_number',' $owner_email','$price','$description','$area','$status','$dst','$add_type')";
        
      
        if (mysqli_query($conn, $sql)) { 
            $msg ="Rent Add is Pending for Aproval";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       
            
        }

    }else if(isset($_POST['sumbit_hire'])){ //hire add starts

         $publisher =$_SESSION['user_email'];
          $vehicle_Brand = $_POST['vehicle_Brand'];
          $vehicle_model = $_POST['vehicle_model'];
          $vehicle_number = $_POST['vehicle_number'];
          $price = $_POST['price'];
          $owner_name = $_POST['owner_name'];
          $owner_phone_number =$_POST['owner_phone_number'];
          $owner_email = $_POST['owner_email'];
          $driver_name =$_POST['driver_name'];
          $driver_phone_number =$_POST['driver_phone_number'];
          $description =$_POST['description'];
          $status ="pending";
          $area =$_POST['area'];
          $add_type = "hire";

          $v1 = rand(1111,9999);
          $v2 = rand(1111,9999);
          $v3 = $v1.$v2;
          $fnm =$_FILES["img_path"]["name"];  
          $dst ="./vehicle_images/".$v3.$fnm;
          $dst1 ="vehicle_images/".$v3.$fnm;      
          move_uploaded_file($_FILES["img_path"]["tmp_name"],$dst);
  
  
          $sql = "INSERT INTO `hire` ( `publisher`, `vehicle_Brand` ,`vehicle_model`,`vehicle_number`,`price`,`owner_name`,`owner_phone_number`,`owner_email`,`driver_name`,`driver_phone_number` ,`description`,`status`,`area`,`img_path`,`add_type`)
          VALUES ( '$publisher','$vehicle_Brand','$vehicle_model','$vehicle_number','$price',' $owner_name',' $owner_phone_number','$owner_email','$driver_name','$driver_phone_number','$description','$status','$area','$dst','$add_type')";
          
        
          if (mysqli_query($conn, $sql)) { 
              $msg ="Hire  Add is Pending for Aproval";
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
include  'header.php'
?>



<div class="container ">
		
 		<!--Publish add section starts -->
	<div  class="tabPanel">

  <div class="alert alert-primary alert-dismissible fade show col-sm-5 ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p><?php echo $msg ?></p>

  </div>

   

			<div>

             
			<p>Select type</P>
            <select class="form-control  col-sm-5">

               

                <option value="sell">Sell</option>

                <option value="rent">Rent</option>

                <option value="hire">hire</option>

				</select>

                </div>

         <!--Sell form start-->   
        <div class="sell box" >
		
		<form action="" method="post" enctype="multipart/form-data">

<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Brand</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_brand"  class="form-control">
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Model</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_model"  class="form-control">
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Number</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_number" class="form-control">
      </div>
    </div>

    
    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Engine Capacity</label>
      <div class="col-sm-4">
      <input type="text" name ="engine_capacity" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Model Year</label>
      <div class="col-sm-4">
      <input type="text" name ="model_year" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Mileage</label>
      <div class="col-sm-4">
      <input type="text" name ="mileage" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Area</label>
      <div class="col-sm-4">
      <input type="text" name ="area" class="form-control">
      </div>
    </div>

    




    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Seller Name</label>
      <div class="col-sm-4">
      <input type="text" name ="seller_name"  class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Phone Number</label>
      <div class="col-sm-4">
      <input type="text" name ="phone_number" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-4">
      <input type="text" name ="email" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-4">
      <input type="text" name ="price" class="form-control">
      </div>
    </div>


   
    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-4">
      <textarea id="form10" class="md-textarea form-control" rows="3"  name ="description"></textarea>
      </div>
    </div>



    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Image</label>
      <div class="col-sm-4">
      <input type="file" name ="img_path" class="form-control">
      </div>
    </div>


  


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="sumbit_sell" value="Publish Add" class="btn btn-primary">
      </div>
    </div>

  
</form>




 

					


        </div>
         <!--Sell form End-->  



<!--rent form start -->
        <div class="rent box">
        <form action="" method="post" enctype="multipart/form-data">

<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Brand</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_Brand"  class="form-control">
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Model</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_model"  class="form-control">
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Number</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_number" class="form-control">
      </div>
    </div>

    
    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner name</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_name" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner phone number</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_phone_number" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner Email</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_email" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">price</label>
      <div class="col-sm-4">
      <input type="text" name ="price" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-4">
      <textarea id="form10" class="md-textarea form-control" rows="3"  name ="description"></textarea>
      </div>
    </div>







    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Area</label>
      <div class="col-sm-4">
      <input type="text" name ="area" class="form-control">
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Image</label>
      <div class="col-sm-4">
      <input type="file" name ="img_path" class="form-control">
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="sumbit_rent" value="Publish Add" class="btn btn-primary">
      </div>
    </div>

  
</form>




  

  </div>

					
        
        </div>

  <!-- rent form end -->      



  <!-- Hire form start -->
  <div class="hire box">
  <form action="" method="post" enctype="multipart/form-data">

<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Brand</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_Brand"  class="form-control">
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Model</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_model"  class="form-control">
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Number</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_number" class="form-control">
      </div>
    </div>

    
    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Price </label>
      <div class="col-sm-4">
      <input type="text" name ="price" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner Name</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_name" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner phone Number</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_phone_number" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner email</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_email" class="form-control">
      </div>
    </div>

  






    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Driver Name</label>
      <div class="col-sm-4">
      <input type="text" name ="driver_name" class="form-control">
      </div>
    </div>



    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Driver Phone Number</label>
      <div class="col-sm-4">
      <input type="text" name ="driver_phone_number" class="form-control">
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Area</label>
      <div class="col-sm-4">
      <input type="text" name ="area" class="form-control">
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Discription</label>
      <div class="col-sm-4">
      <textarea id="form10" class="md-textarea form-control" rows="3"  name ="description"></textarea>
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Image</label>
      <div class="col-sm-4">
      <input type="file" name ="img_path" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="sumbit_hire" value="Publish Add" class="btn btn-primary">
      </div>
    </div>




  
</form>
  </div>
	<!-- Hire form end -->
	
	
	
	
	</div>
	<!--publish add section End-->
	
	
</div>


</body>
</html>




<?php mysqli_close($conn); ?>




