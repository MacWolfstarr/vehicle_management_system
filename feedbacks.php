

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
if(isset($_POST['delete_feedback']) ){  

  $id = $_POST['id'];

  $sql = " DELETE FROM feedback WHERE id = '$id'" ;





  if (mysqli_query($conn, $sql)) { 
    $msg ="Feedback deleted Successfully!";
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

   

		

    


  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">add_id </th>
      <th scope="col">description</th>
      <th scope="col">Delete</th>
     
    
    
   
    </tr>
  </thead>

  <tbody>

<?php

        $publisher = $_SESSION['user_email'];
      
        $sql = "SELECT * FROM feedback where publisher='$publisher'  ";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {

     
   ?>


<tr class="text-dark"> 
      <th scope="row"><?php echo $row['add_id']?></th>
      <td><?php echo $row['description']?></td>
     
     
      <td>  <form method="post" action="">
            <input type="hidden" value="<?php echo $row['id']?>" name="id">
            <input type="submit" class="btn btn-danger" value="Delete" name="delete_feedback">
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


</body>
</html>




<?php mysqli_close($conn); ?>




