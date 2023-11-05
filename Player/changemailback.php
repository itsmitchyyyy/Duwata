<?php 

	require("dbconn.php");
	
	$playID = $_GET['playerID'];
	$Email = $_POST['player_email'];
	
	$changemail = "UPDATE players SET player_email='{$Email}' WHERE playerID='$playID'";
	$result = mysqli_query($conn,$changemail);
	
	header("Location:settings.php?playerID=".$playID);
	
?>