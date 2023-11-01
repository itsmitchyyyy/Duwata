<?php 
require("dbconn.php");

$today = date("Y-m-d");

$sql = "SELECT booking_date FROM booking WHERE status = 'Accepted'";
$result = $conn->query($sql);
$bookedDates = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookedDates[] = $row['booking_date'];
    }
}
?>

<html>
<head>
    <title>BOOKING</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            var bookedDates = <?php echo json_encode($bookedDates); ?>;
            $("#calendar").datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0, // Set minimum date to today
                beforeShowDay: function (date) {
                    var stringDate = $.datepicker.formatDate('yy-mm-dd', date);
                    
                    // Check if the date is in the booked dates array
                    if (bookedDates.indexOf(stringDate) !== -1) {
                        // If the date is booked, check if all time slots are taken
                        return isAllTimeSlotsBooked(stringDate) ? [false, 'fully-booked'] : [true, ''];
                    }
                    return [true, ''];
                },
                onSelect: function (dateText, inst) {
                    var selectedDate = $(this).val();
                    window.location.href = 'gymselect_time.php?date=' + selectedDate;
                }
            });
        });

        function isAllTimeSlotsBooked(selectedDate) {
            // Logic to check if all time slots for the selected date are booked
            // Perform an AJAX call or fetch data to check the booked time slots for the selected date
            // Return true if all time slots are booked, otherwise return false
            // This part would need to be implemented based on your specific database structure
            // and the way time slots are booked.
            // Here is just a placeholder logic:

            // Example: Assuming the time slots for a day are '7:00', '8:00', '9:00', ... '23:00'
            var allTimeSlots = ['7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'];
            var bookedTimeSlotsForDate = ['8:00', '9:00', '10:00']; // Placeholder: Simulated booked time slots for the selected date

            for (var i = 0; i < allTimeSlots.length; i++) {
                if (bookedTimeSlotsForDate.indexOf(allTimeSlots[i]) === -1) {
                    return false; // At least one time slot is available
                }
            }
            return true; // All time slots are booked
        }
    </script>
    <style>
        .ui-datepicker-calendar td.fully-booked a {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div id="calendar"></div>
</body>
</html>
