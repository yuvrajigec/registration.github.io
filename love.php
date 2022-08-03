<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ragistration_form";

	$con = mysqli_connect($servername,$username,$password,$dbname);

	if($con){
		//echo "Okay! Your Connection is ready";
	}
	else{
		echo "Sorry! Please try again.".mysqli_connect_error();
	}
?>