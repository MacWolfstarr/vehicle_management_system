<?php

include "inc/config.php";
session_start();
if($_POST)
{
	$user_id=$_SESSION['user_id'];
	$name=$_SESSION['first_name'];
	$msg=$_POST['msg'];
	$user_id2 =$_SESSION['rent_id']
    
	$sql="INSERT INTO `chat`(`user_id`,`first_name`, `message`,`user_id2`) VALUES ('".$user_id."', '".$name."', '".$msg."', '".user."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>