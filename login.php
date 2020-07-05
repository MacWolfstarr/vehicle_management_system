
<?php session_start();?>

<?php 
 include ("./inc/config.php");
?>


<?php

  if(isset($_POST['sign_In'])){

    $errors = array();

      if(!isset ($_POST['email']) || strlen(trim($_POST['email'])) < 1  ){
          $errors [] = "Username is Missing / Invalid ";
      }

      if(!isset ($_POST['password']) || strlen(trim($_POST['password'])) < 1  ){
        $errors [] = "Password is Missing / Invalid ";
    }

    if(empty($errors)){

      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password =  mysqli_real_escape_string($conn,$_POST['password']);
      $hashed_password = sha1($password);

      $query = "SELECT * FROM user
                WHERE email = '{$email}'
                AND password = '{$hashed_password}'
                LIMIT 1 ";

      $result_set = mysqli_query($conn,$query);      

      if($result_set){
        if(mysqli_num_rows($result_set) == 1){
            //vallid user found
            $user = mysqli_fetch_assoc($result_set);
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['role'] = $user['role'];


            $role =  $user['role'];

            if($role == 'user'){
              header('Location: index.php');
            }else{
              header('Location: sell_admin_panel.php');
            }


         



        }else{
           //username and password invalid
           $errors[] = "Invalid username / password";
        }
      }else{
        $errors[] = "Database query faild";
      }


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
include  'header.php'
?>




<div class="container" style="background:#3E4551;">


<?php

  if($_GET['logout'] == 'yes' ){
    
      echo  '<h5 class="text-info" style="margin-left:270px;"> You have succesfully logged out from the system</h5>';
   
  }else if($_GET['logout'] == 'No' ){
    echo  '<h5 class="text-info" style="margin-left:430px;"> Please Login!</h5>';
  }


  
?>





<div class="login_Box">



<?php 
  if( isset($errors) &&  !empty($errors)){
    echo '<h5 style="text-align:center;"  class="bg-danger text-white" > Invalid username / Password </h5>';
  }
?>



<form action="" method="post">

<h3 style="text-align:center; padding:20px;">Sign In</h3>

<div class="form-group row  ">
      <label class="col-sm-3 col-form-label">Username</label>
      <div class="col-sm-8">
          <input type="text" name ="email"  class="form-control" placeholder="Enter email">
      </div>
    </div>


<div class="form-group row  ">
      <label class="col-sm-3 col-form-label">Password</label>
      <div class="col-sm-8">
          <input type="password" name ="password"  class="form-control" placeholder="Enter password">
      </div>
    </div>

  


    <div class="form-group row">
      <div class="col-sm-10">
        <input type="submit" name="sign_In" value="Sign In" class="btn btn-secondary" style="margin-left:180px;">
      </div>
    </div>


    </form>






</div>



</div>
    



</body>
</html>


<?php mysqli_close($conn); ?>


