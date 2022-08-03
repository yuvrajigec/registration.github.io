<?php 
include("love.php");
$id = $_GET['id'];
$query = "DELETE FROM form where EMP_ID='$id'";

$data = mysqli_query($con, $query);

if ($data) {
	// code...
	echo "Record Delete Successfully";
	?>
		<meta http-equiv = "refresh" content = "0; url = http://localhost/boy/display.php" />
	<?php
}
else{
	echo "Sorry! You can't Delete Data.";
}



?>