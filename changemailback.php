<?php 

	require("dbconn.php");
	
	$ID = $_GET['userid'];
	$Email = $_POST['user_email'];
	
	$changemail = "UPDATE users SET user_email='{$Email}' WHERE userid='$ID'";
	$result = mysqli_query($conn,$changemail);
	
	header("Location:settings.php?userid=".$ID);
	
?>