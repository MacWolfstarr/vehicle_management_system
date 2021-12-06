

<?php session_start();?>

<?php 
 include ("./inc/config.php");
?>

<?php
     

     // if (!isset($_SESSION['user_email'] )) {
      //  header('Location:login.php');

     // }else if($_SESSION['role'] == 'admin'){
        //  echo "Fobided!";
       //  header('Location:sell_admin_panel.php');

      //}

  ?>



<?php
if(isset($_POST['delete_user']) ){  

  $id = $_POST['id'];

  $sql = " DELETE FROM user WHERE user_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="User deleted Successfully!";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    
}

}else if(isset($_POST['delete_feedbacks']) ){

  $id = $_POST['id'];

  $sql = " DELETE FROM feedback WHERE id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Feedbacks deleted Successfully!";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    
}

}else if(isset($_POST['delete_sell']) ){

  $id = $_POST['sell_id'];

  $sql = " DELETE FROM sell WHERE sell_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Item deleted Successfully!";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    
}
}else if(isset($_POST['delete_rent']) ){

  $id = $_POST['rent_id'];

  $sql = " DELETE FROM rent WHERE rent_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Item deleted Successfully!";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    
}
}else if(isset($_POST['delete_hire']) ){

  $id = $_POST['hire_id'];

  $sql = " DELETE FROM hire WHERE hire_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Item deleted Successfully!";
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



<!-- <div class="container "> -->
		
 		<!--Publish add section starts -->
	<!-- <div  class="tabPanel"> -->

  

  </div>

   

			<div>

             
			<p style="color:white">Select the Table</P>
            

                </div>
    <div class="form-group row  ">
    <label class="col-sm-4 col-form-label" style="color:white">Order reports by Date</label>
    <div class="col-sm-2">
    <select class="form-control  col-sm-11">

               

<option value="user">User</option>

<option value="feedback">Feedbacks</option>

<option value="sell">Sell</option>
<option value="rent">Rent</option>
<option value="hire">hire</option>
<option value="buyer_requests">Buyer Requests</option>

</select>
</div> 
      <div class="col-sm-2">
          <input type="date" name ="date"  class="form-control" required>
      </div>
      <div class="col-sm-2">
          <input type="date" name ="date"  class="form-control" required>
      </div>

         <!--Sell form start-->   
        <div class="user box" >

        <table class="table ">
  <thead class="thead-dark">
    <tr>
    <th scope="col">User ID</th>
    <th scope="col">Date & Time</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th> 
      
    
   
    </tr>
  </thead>

  <tbody>

<?php

        //$publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM user    ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['user_id']?></th>
      <td><?php echo $row['date_time']?></td>
      <td><?php echo $row['first_name']?></td>
      <td><?php echo $row['last_name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['role']?></td>
      <td>

      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['user_id']?>" name="id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_user">
            </form>
     </td>
     
    
      
    </tr>






<?php
}
}else{
	echo "0 Result";
}

?>

</tbody>
</table>


 

					


        </div>
         <!--Sell form End-->  



<!--rent form start -->
        <div class="feedback box">




        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date & Time</th>
      <th scope="col">User</th>
      <th scope="col">Add ID</th>
      <th scope="col">Add Type</th>
      <th scope="col">Description</th>
      <th scope="col">Publisher</th>
      <th scope="col">Rate</th>
      
    
   
    </tr>
  </thead>

  <tbody>
  <?php

//$publisher = $_SESSION['user_email'];

$sql = "SELECT * FROM feedback";
$result =$conn ->query($sql);

if($result->num_rows > 0){
while ($row =$result ->fetch_assoc())
{
?>


<tr class="text-light"> 
<th scope="row"><?php echo $row['id']?></th>
<td><?php echo $row['date_time']?></td>
<td><?php echo $row['user']?></td>
<td><?php echo $row['add_id']?></td>
<td><?php echo $row['add_type']?></td>
<td><?php echo $row['description']?></td>
<td><?php echo $row['publisher']?></td>
<td><?php echo $row['rate']?></td>
<td>


</td>
<td>  <form method="post" action="">
    <input type="hidden" value="<?php echo $row['id']?>" name="id">
    <input type="submit" class="btn btn-danger" value="Delete" name="delete_user">
    </form>
</td>



</tr>

<?php
}
}else{
	echo "0 Result";
}

?>
</tbody>
</table>
        
          



  </div>
  
	<!-- Hire form end -->
	
	<div class="sell box">




        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Publisher</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Seller Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">E-mail</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Engine Capacity</th>
      <th scope="col">Model Year</th>
      <th scope="col">Mileage</th>
      <th scope="col">Area</th>
      <th scope="col">Add Type</th>
      
    
   
    </tr>
  </thead>

  <tbody>
  <?php

//$publisher = $_SESSION['user_email'];

$sql = "SELECT * FROM sell";
$result =$conn ->query($sql);

if($result->num_rows > 0){
while ($row =$result ->fetch_assoc())
{
?>


<tr class="text-light"> 
<th scope="row"><?php echo $row['sell_id']?></th>
<td><?php echo $row['date_time']?></td>
<td><?php echo $row['publisher']?></td>
<td><?php echo $row['vehicle_model']?></td>
<td><?php echo $row['vehicle_number']?></td>
<td><?php echo $row['seller_name']?></td>
<td><?php echo $row['phone_number']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['price']?></td>
<td><?php echo $row['description']?></td>
<td><?php echo $row['status']?></td>
<td><?php echo $row['vehicle_brand']?></td>
<td><?php echo $row['engine_capacity']?></td>
<td><?php echo $row['model_year']?></td>
<td><?php echo $row['mileage']?></td>
<td><?php echo $row['area']?></td>
<td><?php echo $row['add_type']?></td>
<td>


</td>
<td>  <form method="post" action="">
    <input type="hidden" value="<?php echo $row['sell_id']?>" name="sell_id">
    <input type="submit" class="btn btn-danger" value="Delete" name="delete_sell">
    </form>
</td>



</tr>

<?php
}
}else{
	echo "0 Result";
}

?>
</tbody>
</table>
	
	
	</div>
	<!--publish add section End-->
	
	
</div>

<div class="hire box" >

        <table class="table ">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Hire ID</th>
    <th scope="col">Date & Time</th>
    <th scope="col">Publisher</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Price</th>
      <th scope="col">Owner Name</th>
      <th scope="col">Owner Phone Number</th>
      <th scope="col">Owner E-mail</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Driver Phone Number</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th> 
      <th scope="col">Area</th> 
      <th scope="col">Add Type</th>
      
    
   
    </tr>
  </thead>

  <tbody>

<?php

        //$publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM hire    ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['hire_id']?></th>
      <td><?php echo $row['date_time']?></td>
      <td><?php echo $row['publisher']?></td>
      <td><?php echo $row['vehicle_Brand']?></td>
      <td><?php echo $row['vehicle_model']?></td>
      <td><?php echo $row['vehicle_number']?></td>
      <td><?php echo $row['price']?></td>
      <td><?php echo $row['owner_name']?></td>
      <td><?php echo $row['owner_phone_number']?></td>
      <td><?php echo $row['owner_email']?></td>
      <td><?php echo $row['driver_name']?></td>
      <td><?php echo $row['driver_phone_number']?></td>
      <td><?php echo $row['description']?></td>
      <td><?php echo $row['status']?></td>
      <td><?php echo $row['area']?></td>
      <td><?php echo $row['add_type']?></td>
      
      <td>

      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['hire_id']?>" name="hire_id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_hire">
            </form>
     </td>
     
    
      
    </tr>






<?php
}
}else{
	echo "0 Result";
}

?>

</tbody>
</table>
</div>
</div>

<div class="rent box" >

        <table class="table ">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Rent ID</th>
    <th scope="col">Date & Time</th>
    <th scope="col">Publisher</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Owner Name</th>
      <th scope="col">Owner Phone Number</th> 
      <th scope="col">Owner E-mail</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th> 
      <th scope="col">Area</th> 
      <th scope="col">Add Type</th>
      
    
   
    </tr>
  </thead>

  <tbody>

<?php

        //$publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM rent    ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['rent_id']?></th>
      <td><?php echo $row['date_time']?></td>
      <td><?php echo $row['publisher']?></td>
      <td><?php echo $row['vehicle_Brand']?></td>
      <td><?php echo $row['vehicle_model']?></td>
      <td><?php echo $row['vehicle_number']?></td>
      <td><?php echo $row['owner_name']?></td>
      <td><?php echo $row['owner_phone_number']?></td>
      <td><?php echo $row['owner_email']?></td>
      <td><?php echo $row['price']?></td>
      <td><?php echo $row['description']?></td>
      <td><?php echo $row['status']?></td>
      <td><?php echo $row['area']?></td>
      <td><?php echo $row['add_type']?></td>
      
      <td>

      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['rent_id']?>" name="rent_id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_rent">
            </form>
     </td>
     
    
      
    </tr>






<?php
}
}else{
	echo "0 Result";
}

?>

</tbody>
</table>
</div>



<div class="Buyer Requests box" >

        <table class="table ">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Buyer ID</th>
    <th scope="col">Date & Time</th>
    <th scope="col">Add ID</th>
      <th scope="col">Buyer Email</th>
      <th scope="col">Buyer Name</th>
      <th scope="col">Buyer Contact</th>
      <th scope="col">Publisher Email</th>
      <th scope="col">Date</th> 
      <th scope="col">Buyer Message</th>
      <th scope="col">Add Type</th>
      <th scope="col">Status</th>
      
    
   
    </tr>
  </thead>

  <tbody>

<?php

        //$publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM buyer_requests   ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['date_time']?></td>
      <td><?php echo $row['add_id']?></td>
      <td><?php echo $row['buyer_email']?></td>
      <td><?php echo $row['buyer_name']?></td>
      <td><?php echo $row['buyer_contact']?></td>
      <td><?php echo $row['publisher_email']?></td>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['buyer_message']?></td>
      <td><?php echo $row['	add_type']?></td>
      <td><?php echo $row['status']?></td>
      
      
      <td>

      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['id']?>" name="id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_buyer_requests">
            </form>
     </td>
     
    
      
    </tr>



 


<?php
}
}else{
	echo "0 Result";
}

?>

</tbody>
</table>
</div>

</body>
</html>




<?php mysqli_close($conn); ?>