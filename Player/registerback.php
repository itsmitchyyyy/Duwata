<?php

	require('dbconn.php');
	
	$firstname = $_POST['player_firstname'];
	$middlename = $_POST['player_middlename'];
	$lastname = $_POST['player_lastname'];
	$email = $_POST['player_email'];
	$gender = $_POST['player_gender'];
	$phonenumber = $_POST['player_phonenumber'];
	$birthdate = $_POST['player_birthdate'];
	$address = $_POST['player_address'];
	$password = $_POST['player_password'];
	
    $playerfilename = $_FILES['player_picture']['name'];
    $playerfilesize = $_FILES['player_picture']['size'];
    $playertmp_name = $_FILES['player_picture']['tmp_name'];
    $playererror = $_FILES['player_picture']['error'];

    $playerfile_ex = pathinfo($playerfilename,PATHINFO_EXTENSION);
    $playerfile_ex_lc  = strtolower($playerfile_ex);

    $allowed_exs = array("jpg","jpeg", "png");

    if(in_array($playerfile_ex_lc, $allowed_exs)){
        $playernewFileName=uniqid("IMG-",true).'.'.$playerfile_ex_lc;
        $playerfile_upload_path='player_picture/'.$playernewFileName;
        move_uploaded_file($playertmp_name,$playerfile_upload_path);

	
	    $createplayer = "INSERT INTO players VALUES ('', '{$firstname}', '{$middlename}', '{$lastname}', '{$email}', '{$gender}', '{$phonenumber}', '{$birthdate}', '{$password}', '{$address}', '{$playernewFileName}')" ;
	    $result = mysqli_query($conn, $createplayer);
	
	header('Location:login.php');
    
    }

?>