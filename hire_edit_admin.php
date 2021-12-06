

<?php session_start();?>

<?php 
 include ("./inc/config.php");


 $id = $_GET['id'];

?>

<?php
     

      if (!isset($_SESSION['user_email'] )) {
        header('Location:hire_edit_admin.php');

      }//else if($_SESSION['role'] == 'admin'){
         // echo "Fobided!";
         // header('Location:sell_admin_panel.php');
    //  }

    



?>


<?php
        if(isset($_POST['hire_edit'])){

          $vehicle_Brand = $_POST['vehicle_Brand'];
          $vehicle_model = $_POST['vehicle_model'];
          $vehicle_number =$_POST['vehicle_number'];
          $price =$_POST['price'];

          $owner_name = $_POST['owner_name'];
          $owner_phone_number = $_POST['owner_phone_number'];

          $owner_email =$_POST['owner_email'];
          $description =$_POST['description'];
          $driver_name =$_POST['driver_name'];
    

          $driver_phone_number =$_POST['driver_phone_number'];
          $area =$_POST['area'];

          $sql = "UPDATE hire
                  SET
                  vehicle_Brand='$vehicle_Brand',
                  vehicle_model='$vehicle_model',
                  vehicle_number ='$vehicle_number',
                  price='$price',
                  owner_name = '$owner_name',
                  owner_phone_number ='$owner_phone_number',
                  owner_email = '$owner_email',
                  description = '$description',
                  driver_name = '$driver_name',
                  driver_phone_number = '$driver_phone_number',
                  area = '$area'
                  WHERE hire_id = '$id';";




              if (mysqli_query($conn, $sql)) { 
                $msg ="Hire Add Edited Successfully!";
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
include  'admin_panel_header.php'
?>










<?php
       // $sql = "SELECT * FROM sell where status='approved'";
        $sql = "SELECT * FROM hire where hire_id=$id ";

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

   

		

         <!--rent form start-->   

		
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-4">
          <input type="text" name ="hire_id"  value="<?php echo $row['hire_id']?>" class="form-control" disabled>
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Brand</label>
      <div class="col-sm-4">
          <input type="text" name ="vehicle_Brand"  class="form-control"  value="<?php echo $row['vehicle_Brand']?>" Required>
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Model</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_model" class="form-control" value="<?php echo $row['vehicle_model']?>" Required>
      </div>
    </div>

    
   

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Vehicle Number</label>
      <div class="col-sm-4">
      <input type="text" name ="vehicle_number" class="form-control" value="<?php echo $row['vehicle_number']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-4">
      <input type="text" name ="price" class="form-control"  value="<?php echo $row['price']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner Name</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_name" class="form-control"  value="<?php echo $row['owner_name']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner Contact</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_phone_number" class="form-control"  value="<?php echo $row['owner_phone_number']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Owner Email</label>
      <div class="col-sm-4">
      <input type="text" name ="owner_email" class="form-control" value="<?php echo $row['owner_email']?>" Required>
      </div>
    </div>

    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Descriptiont</label>
      <div class="col-sm-4">
      <textarea  class="md-textarea form-control" rows="3"  name ="description" Required > <?php echo $row['description']?> </textarea>
      </div>
    </div>
    




    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Driver Name</label>
      <div class="col-sm-4">
      <input type="text" name ="driver_name"  class="form-control" value="<?php echo $row['driver_name']?>" Required>
      </div>
    </div>



    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Driver Contact</label>
      <div class="col-sm-4">
      <input type="text" name ="driver_phone_number" class="form-control" value="<?php echo $row['driver_phone_number']?>" Required>
      </div>
    </div>

    
    <div class="form-group row  ">
      <label class="col-sm-2 col-form-label">Area</label>
      <div class="col-sm-4">
      <input type="text" name ="area" class="form-control" value="<?php echo $row['area']?>"  Required>
      </div>
    </div>

  

  


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="hire_edit" value="Edit Add" class="btn btn-primary">
      </div>
    </div>

  
</form>




 

	
</div>				


        </div>
         <!--rent form End-->  


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




