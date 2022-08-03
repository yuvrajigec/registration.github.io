<?php
	include("love.php");
	$id=$_GET['id'];

$query = "SELECT * FROM FORM WHERE EMP_ID='$id'";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
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
				UPDATE EMPLOY DITELS
			</div>
			
			<div class="form">
				<div class="input_field">
					<label>First Name</label>
					<input type="text" class="input" name="fname" required value="<?php echo $result['fname']; ?>">
				</div> 
				<div class="input_field">
					<label>Last Name</label>
					<input type="text"  class="input" name="lname" required value="<?php echo $result['lastname']; ?>">
				</div>
				<div class="input_field">
					<label>E-mail</label>
					<input type="E-mail"  class="input" name="gmail" value="<?php echo $result['email']; ?>">
				</div>
				<div class="input_field">
					<label>Date of Birth</label>
					<input type="date"  class="input" name="dob" required value="<?php echo $result['dob']; ?>">
				</div>
				<div class="input_field">
					<label>Password</label>
					<input type="password" class="input" name="pass" required value="<?php echo $result['password']; ?>">
				</div>
				<div class="input_field">
					<label>Conform Password</label>
					<input type="password" class="input" name="cnfpass" required value="<?php echo $result['cnfpassword']; ?>">
				</div>
				<div class="input_field">
					<label>Gender</label>
					<select class="selectbox" name="gender" required >
						<option value="not select">Select</option>
						<option value="male"
						<?php 
							if ($result['gender']=='male'){
								// code...
								echo "selected";
							}
						?>
						>Male</option>
						<option value="Female"
						<?php 
							if ($result['gender']=='Female'){
								// code...
								echo "selected";
							}
						?>
						>Female</option>
						<option value="666">Not Define</option>
					</select>
				</div>
				<div class="input_field">
					<label>Mobile Number</label>
					<input type="text"  class="input" name="mobile" required value="<?php echo $result['mobileno']; ?>">
				</div>
				<div class="input_field">
					<label>Address</label>
					<textarea class="aditi" name="address" required>
					<?php echo $result['address']; ?>
					</textarea>
				</div>
				
				<div class="input_field_term">
										
						
						<p><label class="check">
							<input type="checkbox" required>
						<span class="checkmark">  </span>I carefully read T&C and I accept Terms and Condition.</label></p>
					
				
				
				</div>
				<div class="input_field">
					<input type="submit" value="Update" class="btn" name="Update">
				</div>

			</div>
		</form>

	</div>

</body>
</html>


<?php if($_POST['Update'])
 	{
 		$a     = $_POST['fname'];
 		$b    = $_POST['lname'];
 		$c       = $_POST['gmail'];
 		$d        = $_POST['dob'];
 		$e       = $_POST['pass'];
 		$f     = $_POST['cnfpass'];
 		$g		 = $_POST['gender'];
 		$h     =     $_POST['mobile'];
 		$i        = $_POST['address'];

 		if ($a!="" && $b !="" && $c !="" && $d !="" && $e !="" && $f !="" && $g != "" && $h !="" && $i !="") {

 			// code...
 			echo "Updated Suceessfully";

				$query = "UPDATE form set fname='$a', lastname='$b', email='$c', dob='$d', password='$e', cnfpassword='$f', gender='$g', 
					mobileno='$h', address='$i' WHERE EMP_ID='$id'";
 		
 				$data = mysqli_query($con, $query);

 				if ($e != $f) {
 					// code...
 					echo "<script>alert('This Password is not match');</script>";
 					
					

 					
 				}

 				if ($data) {
 			
 					echo "<script>alert('Update Successfully');</script>";
 					?>

 					<meta http-equiv = "refresh" content = "0; url = http://localhost/boy/display.php" />
 				<?php
 				}
 				else{
 				echo "fail";
 			}
 	}

 	else{
 		echo "<script>alert('Please Update Form');</script>";
 	}

 	}

?>


