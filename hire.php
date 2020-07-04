
<?php session_start();?>

<?php 
 include ("./inc/config.php");
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


<div class="add_section">

    <!--Hire adds view starts-->

<?php
       $sql = "SELECT * FROM hire where status='approved'";
     //   $sql = "SELECT * FROM hire ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>

          


<div class="card mb-3  border-primary  " style="max-width:400px;  height:auto;  ">
<div class="card-header">
<h5 class="card-title text-info" style="font-weight: bold;"><?php echo $row["vehicle_Brand"]  ." ". $row["vehicle_model"] ." ".$row["vehicle_number"];?> </h5><h6 class="text-success">For Hire</h6>
</div>
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./<?php echo $row["img_path"];?>" class="card-img" alt="..." >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        
       
        <p>RS. <?php echo $row["price"];?></p>
        <p>Location:  <?php echo $row["area"] ?> </p>
      
      </div>
    </div>
  </div>
  <div class="card-footer bg-transparent border-primary">  
   <a href="hire_view_description.php?hire_id=<?php echo $row['hire_id'];?>"><input type="submit" name="sumbit_sell" value="View Description" class="btn btn-primary"></a>
   </div>

</div>





<?php
}
}else{
	echo "0 Result";
}

?>

</div>

</div>
    <!--Hire adds view End-->




</div>
    



</body>
</html>

<?php mysqli_close($conn); ?>