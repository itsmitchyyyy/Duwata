<?php
	
	require('dbconn.php');
	
	$userDetails = array();
	
	$fetchQuery ="SELECT * FROM users";
	
	$result = mysqli_query($conn, $fetchQuery);

if (mysqli_num_rows($result) > 0) {
	while($userResult = mysqli_fetch_array($result)) {
		$userDetails['user_email'] = $userResult['user_email'];
		$userDetails['user_password'] = $userResult['user_password'];
	}
	
}


?>