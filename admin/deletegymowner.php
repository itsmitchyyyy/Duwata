<?php

    require("dbconn.php");

    $adID =$_GET['adminID'];
    $ID = $_GET['userid'];

    $deletegymowner = "DELETE FROM users WHERE userid='$ID'";
    $result = mysqli_query($conn, $deletegymowner);

    header("Location:gym.php?adminID=".$adID);


?>