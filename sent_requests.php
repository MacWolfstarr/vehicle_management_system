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
include  'header2.php'
?>



<div class="container-fluid"  >


<table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Add ID</th>
      <th scope="col">Buyer name</th>
      <th scope="col">Buyer Contact</th>
      <th scope="col">Buyer Email</th>
      
   
      <th scope="col">Publisher Email </th>
      <th scope="col">Date</th>
      <th scope="col">Your Message</th>
      <th scope="col">Add Type </th>
      <th scope="col">Status</th>
   
    </tr>
  </thead>

  <tbody>

<?php
        //var_dump($_SESSION);
        $sender_catch =$_SESSION['user_email'];

        //echo  $sender_catch;
      
        $sql = "SELECT * FROM buyer_requests where buyer_email = '$sender_catch'";
        $result =$conn ->query($sql);

        if($result->num_rows > 0){
    	while ($row =$result ->fetch_assoc())
	    {
   ?>


<tr class="text-light">
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['add_id']?></td>
      <td><?php echo $row['buyer_name']?></td>
      <td><?php echo $row['buyer_contact']?></td>
      <td><?php echo $row['buyer_email']?></td>
      <td><?php echo $row['publisher_email']?></td>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['buyer_message']?></td>
      <td><?php echo $row['add_type']?></td>
      <td class="text-success"><?php echo $row['status']?></td>
    
      
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