<?php 

	require("dbconn.php");
	
	$ID = $_GET['userid'];
	$Add = $_POST['user_address'];
	
	$changeAdd= "UPDATE users SET user_address='{$Add}' WHERE userid='$ID'";
	$result = mysqli_query($conn,$changeAdd);
	
	header("Location:settings.php?userid=".$ID);
	
?>