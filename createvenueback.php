<?php

    require("dbconn.php");

    
    $ID = $_GET['userid'];
    $name = mysqli_real_escape_string($conn, $_POST['gym_name']);
    $location = mysqli_real_escape_string($conn, $_POST['gym_location']);
    $conperson = mysqli_real_escape_string($conn, $_POST['gym_contactperson']);
    $connumber = mysqli_real_escape_string($conn, $_POST['gym_contactnumber']);
    $email = mysqli_real_escape_string($conn, $_POST['gym_email']);
    $sports = mysqli_real_escape_string($conn, $_POST['gym_sports']);
    $price = mysqli_real_escape_string($conn, $_POST['gym_price']);
    $rules = mysqli_real_escape_string($conn, $_POST['gym_rules']);

    $gymfilename = $_FILES['gym_picture']['name'];
    $gymfilesize = $_FILES['gym_picture']['size'];
    $gymtmp_name = $_FILES['gym_picture']['tmp_name'];
    $gymerror = $_FILES['gym_picture']['error'];

    $mapfilename = $_FILES['map_picture']['name'];
    $mapfilsize = $_FILES['map_picture']['size'];
    $maptmp_name = $_FILES['map_picture']['tmp_name'];
    $maperror = $_FILES['map_picture']['error'];

    $gymfile_ex = pathinfo($gymfilename,PATHINFO_EXTENSION);
    $gymfile_ex_lc  = strtolower($gymfile_ex);

    $mapfile_ex = pathinfo($mapfilename,PATHINFO_EXTENSION);
    $mapfile_ex_lc  = strtolower($mapfile_ex);

    $allowed_exs = array("jpg","jpeg", "png");

    if(in_array($gymfile_ex_lc, $allowed_exs)){
        $gymnewFileName=uniqid("IMG-",true).'.'.$gymfile_ex_lc;
        $gymfile_upload_path='gym_picture/'.$gymnewFileName;
        move_uploaded_file($gymtmp_name,$gymfile_upload_path);

        if(in_array($mapfile_ex_lc, $allowed_exs)){
            $mapnewFileName=uniqid("IMG-",true).'.'.$mapfile_ex_lc;
            $mapfile_upload_path='gym_map/'.$mapnewFileName;
            move_uploaded_file($maptmp_name,$mapfile_upload_path);  
        

            $addgym = "INSERT INTO gym VALUES ('', '$ID', '$name', '$location', '$conperson', '$connumber', '$email', '$sports', '$price', '$rules', '$gymnewFileName', '$mapnewFileName')";
             $result = mysqli_query($conn, $addgym);
    
        header("Location:home.php?userid=".$ID);
        }
    }








?>