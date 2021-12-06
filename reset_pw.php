

<?php 
 include ("./inc/config.php");
?>



<?php

  if(isset($_POST['Reset'])){

      
    $n_password=$_POST['n_password'];
    $email=$_POST['email'];
    $security_q=$_POST['security_q'];
    $hashed_password = sha1($n_password);
    $sql11 ="Select email,security_q from user where email='$email'";
    $result =$conn ->query($sql11);
    $row =$result ->fetch_assoc();
    $email_check= $row["email"];
    $sec_q=$row["security_q"];
   if($email_check == $email && $sec_q==$security_q){
    $sql= "UPDATE user
    SET password = '$hashed_password'
    WHERE email ='$email'";
 
      // Prepare statement
   $stmt = $conn->prepare($sql);
 
   // execute the query
   $stmt->execute();
   $msg ="Password Recovered Successfully";
   }
   else{
      //username and password invalid
      $msg ="Invalid Email / Security Question";
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

    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</head>
<body>


<?php
include  'header.php'
?>






<div class="container" style="background:#3E4551;">
<div class="login_Box">

<form action="" method="post">

<h3 style="text-align:center; padding:20px;">Reset Password</h3>

<div class="form-group row  ">
      <label class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-8">
          <input type="text" name ="email"  class="form-control" required>
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-3 col-form-label">What is your mother's maiden name?</label>
      <div class="col-sm-8">
          <input type="text" name ="security_q"  class="form-control" required>
      </div>
    </div>

    


    <div class="form-group row  ">
      <label class="col-sm-3 col-form-label"> New Password</label>
      <div class="col-sm-8">
          <input type="password" name ="n_password"  class="form-control" required id="myInput">
      </div>
    </div>
    
    <div class="form-check mb-2 mr-sm-2" style="text-align:center; ">
    <input type="checkbox" onclick="myFunction()" >Show Password
    </div>
    
    


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="Reset" value="Reset" class="btn btn-secondary" style="margin-left:180px;">
      </div>
    </div>



    </form>

    <h5 style="text-align:center;"  class="bg-success text-white" ><?php echo $msg ?></h5>




</div>


</div>
    



</body>
</html>

<?php mysqli_close($conn); ?>
