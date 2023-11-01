<?php
require("dbconn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['timeslot'])) {
    $selectedDate = $_POST['booking_date'];
    $timeslots = $_POST['timeslot'];

    $alreadyBookedTimes = array(); // To store already booked times

    // Retrieve already booked times for the selected date
    $sql = "SELECT booking_time FROM booking WHERE booking_date = '$selectedDate' AND status = 'Accepted'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $alreadyBookedTimes[] = $row['booking_time'];
        }
    }

    $selectedTimesAvailable = array(); // To store the times available for booking

    // Loop through the selected timeslots to check availability
    foreach ($timeslots as $slot) {
        if (!in_array($slot, $alreadyBookedTimes)) {
            $selectedTimesAvailable[] = $slot; // Store available times
        }
    }

    // Check if any selected times are available
    if (count($selectedTimesAvailable) > 0) {
        // At least one selected time is available for booking
        // Insert the available times into the database

        foreach ($selectedTimesAvailable as $availableSlot) {
            $sql = "INSERT INTO booking (booking_date, booking_time, status) VALUES ('$selectedDate', '$availableSlot', 'Accepted')";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
                // Handle the error accordingly
            }
        }
    } else {
        // No available times were selected, all were already booked
        echo "All selected time slots for $selectedDate are already booked.";
        // Redirect or perform the necessary action here
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Time</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        .ui-datepicker-calendar td a {
            padding: 0.2em;
        }
    </style>
</head>
<body>
    <h1>Select Time Slot</h1>
    <form id="bookingForm" action="confirm_booking.php" method="post"> 
        <input type="hidden" name="booking_date" value="<?php echo $_GET['date']; ?>">

        <?php
        require("dbconn.php");

        $selectedDate = $_GET['date'];
        $sql = "SELECT booking_time FROM booking WHERE booking_date = '$selectedDate' AND status = 'Accepted'";
        $result = $conn->query($sql);
        $bookedTimes = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookedTimes[] = $row['booking_time'];
            }
        }

        $timeSlots = array("7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00");
        foreach ($timeSlots as $time) {
            $disabled = (in_array($time, $bookedTimes)) ? 'disabled' : '';
            $message = (in_array($time, $bookedTimes)) ? ' - Already Booked' : '';
            echo '<label for="' . $time . '">' . $time . $message . '</label>';
            echo '<input type="checkbox" name="timeslot[]" id="' . $time . '" value="' . $time . '" ' . $disabled . '>';
        }
        ?>

        <input type="submit" value="Book Time Slot">
    </form>

    <script>
        $('#bookingForm').submit(function() {
            var selectedTimes = $('input[name="timeslot[]"]:checked').map(function(){
                return this.value;
            }).get();
            
            var alreadyBooked = <?php echo json_encode($bookedTimes); ?>;
            
            var conflict = selectedTimes.some(time => alreadyBooked.includes(time));
            if (conflict) {
                alert('You cannot select a time that is already booked on the same date.');
                return false; // Prevent form submission
            }
        });
    </script>
</body>
</html>

