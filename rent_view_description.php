
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
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Request </button>
      </small>
     
    </div>
  </div>
</div>


<!--Bootstrap Model code START-->
<!---####################################################################################################################################-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form action=""  method="POST" >
      <div class="modal-body">
        
              <input type="text" class="form-control">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button"   name="sell_request_btn" class="btn btn-primary">Send Request</button>
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
    

</div>

</div>
    



</body>
</html>

<?php mysqli_close($conn); ?>