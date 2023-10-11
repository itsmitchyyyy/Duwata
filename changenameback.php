<?php

	require('dbconn.php');
	
	$ID = $_GET['userid'];
	$firstname = $_POST['user_firstname'];
	$middlename = $_POST['user_middlename'];
	$lastname = $_POST['user_lastname'];
	
	$changename = "UPDATE users SET user_firstname='{$firstname}', user_middlename='{$middlename}', user_lastname='{$lastname}' WHERE userid='$ID'";
	$result = mysqli_query($conn,$changename);
	
	header("Location:settings.php?userid=".$ID);
	

?>