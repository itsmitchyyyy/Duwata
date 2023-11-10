<?php 

	require("dbconn.php");
	
	$ID = $_GET['userid'];
	$Pass = $_POST['user_password'];
	
	$changepass = "UPDATE users SET user_password='{$Pass}' WHERE userid='$ID'";
	$result = mysqli_query($conn,$changepass);
	
	header("Location:settings.php?userid=".$ID);
	
?>