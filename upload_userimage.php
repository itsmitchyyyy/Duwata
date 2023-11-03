<?php 

    require("dbconn.php");

    $ID = $_GET['userid']; 
    $filename = $_FILES['user_picture']['name'];
    $filesize = $_FILES['user_picture']['size'];
    $tmp_name = $_FILES['user_picture']['tmp_name'];
    $error = $_FILES['user_picture']['error'];
    

    $file_ex = pathinfo($filename,PATHINFO_EXTENSION);
    $file_ex_lc  = strtolower($file_ex);

    $allowed_exs = array("jpg","jpeg", "png");

    if(in_array($file_ex_lc, $allowed_exs)){
        $newFileName=uniqid("IMG-",true).'.'.$file_ex_lc;
        $file_upload_path='user_image/'.$newFileName;
        move_uploaded_file($tmp_name,$file_upload_path);

        $updateimg = "UPDATE users set user_picture ='$newFileName' WHERE userid='$ID'";
        $result = mysqli_query($conn, $updateimg);

        header("Location:settings.php?userid=".$ID);
    }
   
?>