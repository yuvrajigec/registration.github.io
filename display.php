

<html>
<head>
	<title>Display</title>
</head>
<style>
	body{
		background-color: #d160F9;
	}
	table{
		background-color: white;
	}
	.Update, .Delete{
		background-color: green;
		width: 40%;
		height: 24px;
		font-size: 12px;
		color: white;
		border-radius: 4px;
		padding: 2px;
		border: none;
		cursor: pointer;

	}
	.Delete{
		background-color: red;
	}

</style>


<?php 
	include("love.php");
	error_reporting(0);

	$query = "SELECT * FROM FORM";
	$data = mysqli_query($con, $query);

	$total = mysqli_num_rows($data);
	$result = mysqli_fetch_assoc($data);

	//echo  $result;


	
	//echo $total;
	if ($total != 0) {
		//echo "Tables have record";
		?>

			<h2 align="center"> <mark> Hello There! This is all Data About form.</mark></h2>

			<h4 align="center"> <mark>College Name:- Indira Gandhi Engineering College Sagar Madhya Pradesh</mark></h4>

			<table border=3px cellspacing="7px" width="90%" align="center">
				<tr>
					<th width="5%">EMP_ID</th>
					<th width="5%">First_Name</th>
					<th width="7%%">Last_Name</th>
					<th width="10%">E-mail</th>
					<th width="7%">DoB</th>
					<th width="2%">Branch</th>
					<th width="5%">Gender</th>
					<th width="4%">Caste</th>
					<th width="10%">Mobile_number</th>
					<th width="13%">Address</th>
					<th width="15%">Opration</th>
				</tr>
			


		<?php
		while ($result = mysqli_fetch_assoc($data)) {
			// code...
		echo "	<tr border=2px>
				<td>".$result[EMP_ID]."</td>
				<td>".$result[fname]."</td>
				<td>".$result[lastname]."</td>
				<td>".$result[email]."</td>
				<td>".$result[dob]."</td>
				<td>".$result[Branch]."</td>
				<td>".$result[gender]."</td>
				<td>".$result[Caste]."</td>
				<td>".$result[mobileno]."</td>
				<td>".$result[address]."</td>
				<td><a href='update_design.php?id=$result[EMP_ID]'><input type='submit' value='Update' class='Update'></a>

				<a href='delete.php?id=$result[EMP_ID]'><input type='submit' value='Delete' class='Delete' 
				onclick = 'return checkdelete()'></a></td>	
			</tr>
			";


		}
	}
	else{
		echo "No record found";
	}

?>
</table>
</html>

<script>
	function checkdelete(){
		return confirm('Are you sure want to delete this record?');
	}

</script>
