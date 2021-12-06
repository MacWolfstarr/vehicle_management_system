<?php 
	$server ="localhost:3306";
	$user_name = "root";
	$password = "";
	$database ="vehicle_hub";


	$conn = new mysqli($server,$user_name,$password,$database);

	if($conn -> connect_error)
	{

		die("connection Faild : " .$conn -> connect_error);


	}	

	else
	{
		//echo ("connected successfully !!");

	}



?>