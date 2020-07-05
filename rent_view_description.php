
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
    <img class="card-img-top" src="./<?php echo $row["img_path"];?>" alt="Card image cap"style="width:700px; height:400;   margin-left: auto; margin-right: auto; ">
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




   
	
	
    <div class="card-footer">
      <small class="text-muted">
      <?php if(!empty($_SESSION)){ ?>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Request </button>
      <?php } ?>
      </small>
    </div>
	
  </div>
</div>



<?php
     $add_id = $row['rent_id'];
     $publisher_email =$row['publisher'];  
     $buyer_email   = $_SESSION['user_email'];;
     $add_type = $row['add_type'];

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



<?php





  if(isset($_POST['rent_request_btn']) ){ 
    $buyer_name = $_POST['buyer_name'];
    $buyer_contact = $_POST['buyer_contact'];
    $date = $_POST['date'];
    $buyer_message = $_POST['buyer_message'];
    $pending = "pending";

    $sql = "INSERT INTO `buyer_requests` ( `add_id`, `buyer_name` ,`buyer_contact`,`buyer_email`,`publisher_email`,`date`,`buyer_message`,`add_type`,`status`)
    VALUES ( '$add_id','$buyer_name','$buyer_contact','$buyer_email','$publisher_email',' $date',' $buyer_message','$add_type','$pending')";
    
    if (mysqli_query($conn, $sql)) { 
        $msg ="Request sent successfully!";
    } else {

          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        
        
    }


    
    }








  ?>



</div>



</div>
    

</div>

</div>







    



</body>
</html>

<?php mysqli_close($conn); ?>