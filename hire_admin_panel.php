<?php session_start();?>

<?php 
 include ("./inc/config.php");
?>



<?php

if(isset($_POST['hire_confirm'])){

    $hire_id = $_POST['hire_id'];

    

    $sql = "UPDATE hire SET status='approved' WHERE hire_id=$hire_id ";

            if ($conn->query($sql) === TRUE) {
          //  echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
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
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


</head>
<body>

<?php
include  'admin_panel_header.php'
?>



<div class="container ">


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">publisher</th>
      <th scope="col">vehicle Brand</th>
      <th scope="col">vehicle Model</th>
      <th scope="col">vehicle Number </th>
      
   
      <th scope="col">Owner Name </th>
      <th scope="col">Contact Number</th>
      <th scope="col">Driver Name </th>
      <th scope="col">Driver Contact </th>
      <th scope="col">Location </th>
      <th scope="col">Status</th>
      <th scope="col">Confirm</th>
    </tr>
  </thead>

  <tbody>

<?php
      
        $sql = "SELECT * FROM hire  where status='pending'";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr>
      <th scope="row"><?php echo $row['hire_id']?></th>
      <td><?php echo $row['publisher']?></td>
      <td><?php echo $row['vehicle_Brand']?></td>
      <td><?php echo $row['vehicle_model']?></td>
      <td><?php echo $row['vehicle_number']?></td>
      <td><?php echo $row['owner_name']?></td>
      <td><?php echo $row['owner_phone_number']?></td>
      <td><?php echo $row['driver_name']?></td>
      <td><?php echo $row['driver_phone_number']?></td>
      <td><?php echo $row['area']?></td>
      <td><?php echo $row['status']?></td>
      <td>
            <form method="post" action="">
            <input type="hidden" value="<?php echo $row['hire_id']?>" name="hire_id">
            <input type="submit" class="btn btn-primary" value="Approve" name="hire_confirm">
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