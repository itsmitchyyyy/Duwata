<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require('dbconn.php');

    $Email = $_POST['player_email'];
    $Pass = $_POST['player_password'];

    $fetch = "SELECT * FROM players";

    $result = mysqli_query($conn, $fetch);

    if (mysqli_num_rows($result) > 0) {
        while ($playerResult = mysqli_fetch_array($result)) {
            if ($Email == $playerResult['player_email'] && $Pass == $playerResult['player_password']) {
                // Authentication successful, set a session variable to indicate the user is logged in
                $_SESSION["logged_in"] = true;
                $_SESSION['player_id'] = $playerResult['playerID'];
                $_SESSION['player_name'] = $playerResult['player_firstname'].' '.$playerResult['player_middlename'].' '.$playerResult['player_lastname'];
                // Redirect the user to the admin_index.php page
                header("Location: sportschoices.php?playerID=".$playerResult['playerID']);
                exit(); // Stop script execution after successful login
            }
        }
    }

    // Redirect to the login page with an authentication error
    header("Location: login.php?authentication=1");
    exit(); // Stop script execution
}

// Initialize authStatus as an empty string
$authStatus = '';

if (isset($_GET['authentication'])) {
    $authStatus = $_GET['authentication'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Your HTML head content here -->
</head>
<body>
<div class="container">
    <!-- Your HTML content here -->
    <?php
    // Check for authentication error and display a message if necessary
    if ($authStatus == 1) {
        echo '<p class="error">Invalid Account Credentials.</p>';
    }
    ?>
    <!-- Your login form and other content here -->
</div>
</body>
</html>