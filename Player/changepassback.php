<?php

	require('dbconn.php');
	
	$playID = $_GET['playerID'];
	$Pass = $_POST['player_password'];
	
	$changepass = "UPDATE players SET player_password='$Pass' WHERE playerID='$playID'";
	$result = mysqli_query($conn,$changepass);
	
	header("Location:settings.php?playerID=".$playID);
	

?>