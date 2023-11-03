<?php 
require("dbconn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['timeslot'])) {

    $ID = $_GET['userid'];
    $gymID = $_GET['gym_id'];
    $selectedDate = $_POST['booking_date']; // Get the selected date
    $timeslots = $_POST['timeslot']; // Array of selected timeslots

    foreach ($timeslots as $slot) {
        $sql = "INSERT INTO booking (booking_date, booking_time, status) VALUES ('$selectedDate', '$slot', 'Accepted')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
            // Handle the error accordingly
        }
    }

    // Redirect back to index.php after the booking is done
    
    header("Location: managegyminfo.php?userid=<?php echo $ID ?>&gym_id=<?php echo $gymID ?>");
    exit; // Ensure to call exit or die after header to prevent further execution
}
?>
