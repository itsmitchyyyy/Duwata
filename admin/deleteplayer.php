<?php

    require("dbconn.php");

    $adID =$_GET['adminID'];
    $playID = $_GET['playerID'];

    $deleteplayer = "DELETE FROM players WHERE playerID='$playID'";
    $result = mysqli_query($conn, $deleteplayer);

    header("Location:home.php?adminID=".$adID);
    
?>