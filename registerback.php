<?php
	require('dbconn.php');
	
	$firstname = $_POST['user_firstname'];
	$middlename = $_POST['user_middlename'];
	$lastname = $_POST['user_lastname'];
	$email = $_POST['user_email'];
	$gender = $_POST['user_gender'];
	$phonenumber = $_POST['user_phonenumber'];
	$birthdate = $_POST['user_birthdate'];
	$address = $_POST['user_address'];
	$password = $_POST['user_password'];
	
	
	$createuser = "INSERT INTO users VALUES ('', '{$firstname}', '{$middlename}', '{$lastname}', '{$email}', '{$gender}', '{$phonenumber}', '{$birthdate}', '{$password}', '{$address}')" ;
	$result = mysqli_query($conn, $createuser);
	
	header('Location:login.php');
?>