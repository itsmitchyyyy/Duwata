<?php

    require("dbconn.php");

    $ID = $_GET['gym_id'];
    $name = $_POST['gym_name'];
    $location = $_POST['gym_location'];
    $conperson = $_POST['gym_contactperson'];
    $connumber = $_POST['gym_contactnumber'];
    $email = $_POST['gym_email'];
    $sports = $_POST['gym_sports'];
    $price = $_POST['gym_price'];
    $rules = $_POST['gym_rules'];

    $addgym = "INSERT INTO gym VALUES ('', '{$name}', '{$location}', '{$conperson}', '{$connumber}', '{$email}', '{$sports}', '{$price}', '{$rules}')";
    $result = mysqli_query($conn,$addgym);

    header("Location:home.php?userid=".$ID)








?>