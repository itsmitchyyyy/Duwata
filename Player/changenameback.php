<?php

	require('dbconn.php');
	
	$playID = $_GET['playerID'];
	$firstname = $_POST['player_firstname'];
	$middlename = $_POST['player_middlename'];
	$lastname = $_POST['player_lastname'];
	
	$changename = "UPDATE players SET player_firstname='{$firstname}', player_middlename='{$middlename}', player_lastname='{$lastname}' WHERE playerID='$playID'";
	$result = mysqli_query($conn,$changename);
	
	header("Location:settings.php?playerID=".$playID);
	

?>