
<?php session_start();?>
<?php 
 include ("./inc/config.php");
?>

<?php 
$rent_id = $_GET['rent_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--############################################ star rating #############################################-->
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/star_rating">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--############################################ star rating #############################################-->

</head>
<body>



<?php
include  'header.php'
?>




<div class="container">




<div class="add_description">




<?php
       // $sql = "SELECT * FROM sell where status='approved'";
        $sql = "SELECT * FROM rent where rent_id=$rent_id ";

        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>

          


<div class="card-group ">
  <div class="card border-primary">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./<?php echo $row['img_path'] ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./<?php echo $row['img_path1'] ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./<?php echo $row['img_path2'] ?>" alt="Third slide">
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
    <div class="card-body">



    <h2 class="card-title " style="font-weight:bold;" ><?php echo $row["vehicle_Brand"]  ." ". $row["vehicle_model"] ." ".$row["vehicle_number"]." ";?></h2>
      <h2> Price : <?php echo $row["price"] ?> </h2>
   

      <table class="table table-hover table-dark" style="width:50%; float:left;">

          <tr>
            <th scope="col">Vehicle Brand: </th>
            <td><?php echo $row["vehicle_Brand"] ?></td>
          </tr>

          <tr>
            <th scope="col">Vehicle Model: </th>
            <td><?php echo $row["vehicle_model"] ?></td>
          </tr>

        
          <tr>
            <th scope="col">Vehicle Number: </th>
            <td><?php echo $row["vehicle_number"] ?></td>
          </tr>

 


     </table>

  

     <table class="table table-hover table-light" style="width:50%">

        <tr>
          <th scope="col">Publisher Account </th>
          <td><?php echo $row["publisher"] ?></td>
        </tr>
        <tr>
          <th scope="col">Owner Name: </th>
          <td><?php echo $row["owner_name"] ?></td>
        </tr>

        <tr>
          <th scope="col">Contact Number: </th>
          <td><?php echo $row["owner_phone_number"] ?></td>
        </tr>
        <tr>
          <th scope="col">Email:  </th>
          <td><?php echo $row["owner_email"] ?></td>
        </tr>
        <tr>
          <th scope="col">Location :  </th>
          <td><?php echo $row["area"] ?></td>
        </tr>

    </table>



     </div>




   
	

	
  </div>
</div>



<?php
     $add_id = $row['rent_id'];
     $publisher_email =$row['publisher'];  
     $buyer_email   = $_SESSION['first_name'];
     $add_type = $row['add_type'];
     $rating = $_POST['rate'];
     $star = $row['rate'];
     
?>






<!--Bootstrap Model code START-->
<!---####################################################################################################################################-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Send Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form action=""  method="POST" >
      <div class="modal-body">
        
      <form action=""  method="POST" >
      <div class="modal-body">
        
      <div class="form-group row  ">
      <label class="col-sm-4 col-form-label">Name</label>
      <div class="col-sm-8">
          <input type="text" name ="buyer_name"  class="form-control" required>
      </div>
      </div>


      <div class="form-group row  ">
      <label class="col-sm-4 col-form-label">Contact Num.</label>
      <div class="col-sm-8">
          <input type="text" name ="buyer_contact"  class="form-control" required>
      </div>
      </div>

      <div class="form-group row  ">
      <label class="col-sm-4 col-form-label">hire Date</label>
      <div class="col-sm-8">
          <input type="date" name ="date"  class="form-control" required>
      </div>
      </div>

      <div class="form-group row  ">
      <label class="col-sm-4 col-form-label">Message</label>
      <div class="col-sm-8">
      <input type="text" name ="buyer_message" class="form-control" required>
      </div>
      </div>

      


      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit"   name="rent_request_btn" class="btn btn-primary">Send Request</button>
      </div>

</form>




    </div>

  </div>
</div>


<!---####################################################################################################################################-->
<!--Bootstrap Model code END-->













<?php
}
}else{
	echo "0 Result";
}

?>





</div>



</div>

<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++- -->
<!-- Add feedback section Starts -->


<?php
  if(isset($_POST['feedback'])){

    $description = $_POST['description'];

    $user = $_SESSION['first_name'];
   

    $sql = "INSERT INTO `feedback` ( `user`, `add_id` ,`add_type`,`description`,`publisher`,`rate`)
    VALUES ( '$user','$add_id','$add_type','$description','$publisher_email','$rating')";
     
     
     if (mysqli_query($conn, $sql)) { 
          $msg ="Feedback added!";
      } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          
          
      }
  }

?>


<?php 

$sql = "SELECT * FROM feedback  where add_id='$add_id'  AND  add_type = '$add_type' ";
$result =$conn ->query($sql);

if($result->num_rows > 0){
while ($row =$result ->fetch_assoc())
{
?>

<div class="alert alert-primary" role="alert">
    <?php  
    echo $row['rate'];
    echo "&nbsp;"; 
             echo  $row['user']; 
              echo "&nbsp;:  "; 
            echo $row['description'];
            
           

           
          
           
       
           
    ?>
</div> 



<?php
}
}else{
	echo "0 Feedbacks";
}

?>



<!-- Add feedback section Ends -->
<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++- -->



</div>

</div>







    



</body>
</html>

<?php mysqli_close($conn); ?>