
<?php
	include("love.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
		<div class="container">
			<form action="" method="POST"> 
			<div class="title">
				REGISTRATION FORM
			</div>
			
			<div class="form">
				<div class="input_field">
					<label>First Name</label>
					<input type="text" class="input" name="fname" required>
				</div> 
				<div class="input_field">
					<label>Last Name</label>
					<input type="text"  class="input" name="lname" required>
				</div>
				<div class="input_field">
					<label>E-mail</label>
					<input type="E-mail"  class="input" name="gmail">
				</div>
				<div class="input_field">
					<label>Date of Birth</label>
					<input type="date"  class="input" name="dob" required>
				</div>
				<div class="input_field">
					<label style="margin-right: 80px;">Branch</label>
					<input type="radio" name="r1" value="IT" required><label style="margin-left: 5px ;">IT</label>
					<input type="radio" name="r1" value="ME" required><label style="margin-left: 5px ;">ME</label>
					<input type="radio" name="r1" value="CE" required><label style="margin-left: 5px ;">CE</label>
					<input type="radio" name="r1" value="EC" required><label style="margin-left: 5px ;">EC</label>
					<input type="radio" name="r1" value="EE" required><label style="margin-left: 5px ;">EE</label>
				</div>
				<div class="input_field">
					<label>Password</label>
					<input type="password" class="input" name="pass" required>
				</div>
				<div class="input_field">
					<label>Conform Password</label>
					<input type="password" class="input" name="cnfpass" required>
				</div>
				<div class="input_field">
					<label>Gender</label>
					<select class="selectbox" name="gender" required>
						<option value="not select">Select</option>
						<option value="male">Male</option>
						<option value="Female">Female</option>
						<option value="666">Not Define</option>
					</select>
				</div>
				<div class="input_field">
					<label style="margin-right: 80px;">Branch</label>
					<input type="radio" name = "r2" value="Genral" required><label style="margin-left: 5px ;">Genral</label>
					<input type="radio" name="r2" value="OBC" required><label style="margin-left: 5px ;">OBC</label>
					<input type="radio" name="r2" value="SC" required><label style="margin-left: 5px ;">SC</label>
					<input type="radio" name="r2" value="ST" required><label style="margin-left: 5px ;">ST</label>
					<input type="radio" name="r2" value="Others" required><label style="margin-left: 5px ;">Others</label>
				</div>
				<div class="input_field">
					<label>Mobile Number</label>
					<input type="text"  class="input" name="mobile" required>
				</div>
				<div class="input_field">
					<label>Address</label>
					<textarea class="aditi" name="address" required></textarea>
				</div>
				
				<div class="input_field_term">
										
						
						<p><label class="check">
							<input type="checkbox" required>
						<span class="checkmark">  </span>I carefully read T&C and I accept Terms and Condition.</label></p>
					
				
				
				</div>
				<div class="input_field">
					<input type="submit" value="Register" class="btn" name="register">
				</div>

			</div>
		</form>

	</div>

</body>
</html>


<?php if($_POST['register'])
 	{
 		$a     = $_POST['fname'];
 		$b    = $_POST['lname'];
 		$c       = $_POST['gmail'];
 		$d        = $_POST['dob'];
 		$p       = $_POST['r1'];
 		$e       = $_POST['pass'];
 		$f     = $_POST['cnfpass'];
 		$g		 = $_POST['gender'];
 		$q =     $_POST['r2'];
 		$h     =     $_POST['mobile'];
 		$i        = $_POST['address'];

 		if ($a!="" && $b !="" && $c !="" && $d !="" && $p !="" && $e !="" && $f !="" && $g != ""&& $q!="" && $h !="" && $i !="") {

 			// code...
 			
 		
 		
				$query = "INSERT INTO form (fname,lastname,email,dob,Branch,password,cnfpassword,gender,Caste,mobileno,address) VALUES('$a', '$b', '$c', '$d', '$p' , '$e', '$f', '$g', '$q',
				 '$h', '$i')";
 		
 				$data = mysqli_query($con, $query);

 				if ($e != $f) {
 					// code...
 					echo "<script>alert('This Password is not match');</script>";
 				}

 				if ($data) {
 			
 					//echo "Successful! your registratin is completed.";
 				}
 				else{
 				echo "fail";
 			}
 			echo "<script>alert('You are Registered Successfully!')</script>";
 			



 			
 	}

 	else{
 		echo "<script>alert('Please fill form');</script>";
 	}
 	?>
 	<meta http-equiv="refresh" content="0;url = http://localhost/boy/display.php"> 
<?php
 	}

?>


