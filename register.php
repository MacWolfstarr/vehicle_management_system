

<?php 
 include ("./inc/config.php");
?>

<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(isset($_POST['sign_up'])){

  

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $security_q = $_POST['security_q'];
    $role = $_POST['role'];

    $hashed_password = sha1($password);

    $sql = "INSERT INTO `user` (`first_name`,`last_name`,`email`,`password`,`security_q`,`role`)
                    VALUES ('$first_name',' $last_name','$email','$hashed_password','$security_q','$role')";

                  


if (mysqli_query($conn, $sql)) { 
  header('location: register2.php');

} else {
echo "error: " . $sql . "<br>" . mysqli_error($conn);
        
        
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

<h3 style="text-align:center; padding:20px;">Sign up</h3>

<div class="form-group row  ">
      <label class="col-sm-3 col-form-label">First Name</label>
      <div class="col-sm-8">
          <input type="text" name ="first_name"  class="form-control" required>
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-3 col-form-label">Last Name</label>
      <div class="col-sm-8">
          <input type="text" name ="last_name"  class="form-control" required>
      </div>
    </div>
    <div>

    <div class="form-group row  ">    
    <label class="col-sm-3 col-form-label"> User Type</label>

            <select name ="role" class="col-sm-8">

                <option value="Seller">Seller</option>

                <option value="Buyer">Buyer</option>

				</select>

                </div>

    

    <div class="form-group row  ">
      <label class="col-sm-3 col-form-label"> Email</label>
      <div class="col-sm-8">
          <input type="email" name ="email"  class="form-control" required>
      </div>
    </div>


    <div class="form-group row  ">
      <label class="col-sm-3 col-form-label"> Password</label>
      <div class="col-sm-8">
          <input type="password" name ="password"  class="form-control" required id="myInput">
      </div>
    </div>
    
    <div class="form-check mb-2 mr-sm-2" style="text-align:center; ">
    <input type="checkbox" onclick="myFunction()" >Show Password
    </div>
    
    

    <div class="form-group row  ">
      <label class="col-sm-3 col-form-label">Security Question </label>
      <div class="col-sm-8">
      <p>(What is your mother's maiden name?)</p>
          <input type="text" name ="security_q"  class="form-control" placeholder="This helps to Recover Your Password" required>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="sign_up" value="Sign Up" class="btn btn-secondary" style="margin-left:180px;">
      </div>
    </div>
    
 
	


    </form>

    <!-- <h5 style="text-align:center;"  class="bg-success text-white" ><?php echo $msg ?></h5> -->




</div>


</div>
    



</body>
</html>

<?php mysqli_close($conn); ?>
