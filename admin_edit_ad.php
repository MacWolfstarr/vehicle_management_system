

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
if(isset($_POST['delete_sell_add']) ){  

  $id = $_POST['id'];

  $sql = " DELETE FROM sell WHERE sell_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Sell Add deleted Successfully!";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    
}

}else if(isset($_POST['delete_rent_add']) ){

  $id = $_POST['id'];

  $sql = " DELETE FROM rent WHERE rent_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Rent Add deleted Successfully!";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    
}

}else if(isset($_POST['delete_hire_add']) ){

  
  $id = $_POST['id'];

  $sql = " DELETE FROM hire WHERE hire_id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Hire Add deleted Successfully!";
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

        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
   
    </tr>
  </thead>

  <tbody>

<?php

        //$publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM sell    ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['sell_id']?></th>
      <td><?php echo $row['vehicle_brand']?></td>
      <td><?php echo $row['vehicle_model']?></td>
      <td><?php echo $row['vehicle_number']?></td>
      <td>

        <a href="sell_edit_admin.php?id=<?php echo $row['sell_id'];?>"> <input type="submit" name="sumbit_sell" value="Edit" class="btn btn-primary"></a>
      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['sell_id']?>" name="id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_sell_add">
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
        <div class="rent box">




        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
   
    </tr>
  </thead>

  <tbody>

<?php

        $publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM rent   ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['rent_id']?></th>
      <td><?php echo $row['vehicle_Brand']?></td>
      <td><?php echo $row['vehicle_model']?></td>
      <td><?php echo $row['vehicle_number']?></td>
      <td>

        <a href="rent_edit_admin.php?id=<?php echo $row['rent_id'];?>"> <input type="submit" name="sumbit_rent" value="Edit" class="btn btn-primary"></a>
      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['rent_id']?>" name="id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_rent_add">
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

  <!-- rent form end -->      



  <!-- Hire form start -->
  <div class="hire box">
        
      


  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vehicle Brand</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
   
    </tr>
  </thead>

  <tbody>

<?php

        $publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM hire";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light"> 
      <th scope="row"><?php echo $row['hire_id']?></th>
      <td><?php echo $row['vehicle_Brand']?></td>
      <td><?php echo $row['vehicle_model']?></td>
      <td><?php echo $row['vehicle_number']?></td>
      <td>

        <a href="hire_edit.php?id=<?php echo $row['hire_id'];?>"> <input type="submit" name="sumbit_hire" value="Edit" class="btn btn-primary"></a>
      
      </td>
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['hire_id']?>" name="id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_hire_add">
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
	
	
	
	
	</div>
	<!--publish add section End-->
	
	
</div>


</body>
</html>




<?php mysqli_close($conn); ?>




