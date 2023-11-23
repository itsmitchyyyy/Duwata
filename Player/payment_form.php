<?php 
session_start();
date_default_timezone_set('Asia/Manila');

require("dbconn.php");
require  '../vendor/autoload.php';

$paymentMode = $_GET['payment'];

$options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );

  $pusher = new Pusher\Pusher(
    'e46647b2f0c1a7819b8f',
    'b9d5317dc39f9a08e6f2',
    '1711672',
    $options
  );

  if (isset($_POST['payNow'])) {
    $amount = $_POST['amount'];
	$bookingSchedule = $_SESSION['booking_schedule_details'];
	$scheduleTime = $_SESSION['schedule_time_details'];
	
	$bookingScheduleInsertSql = "INSERT INTO booking_schedule (schedule_time_Id, playerId) VALUES('".$bookingSchedule['schedule_time_Id']."', '".$bookingSchedule['playerId']."')";
	if ($conn->query($bookingScheduleInsertSql)) {
        $bookingScheduleId = $conn->insert_id;

		$updateScheduleTimeSql = "UPDATE schedule_time SET status = '".$scheduleTime['status']."' WHERE id = ".$scheduleTime['id'];
		if ($conn->query($updateScheduleTimeSql)) { 

            $status = $paymentMode == 'cash' ? 'pending' : 'paid';
            $gcashNo = $paymentMode == 'gcash' ? '09123456789' : null;
            $paymentSql = "INSERT INTO transactions (payment_mode, amount, booking_schedule_id, status, gcash_no) VALUES('".$paymentMode."', '".$amount."', '".$bookingScheduleId."', '".$status."', '".$gcashNo."')";
            if ($conn->query($paymentSql)) {
                $data['message'] =  $_SESSION['player_name']." has added a booking";
                $data['createdAt'] = date('g:i A');
    
                $notificationSql = "INSERT INTO notifications (playerId, message) VALUES('".$bookingSchedule['playerId']."', '".$data['message']."')";
                if ($conn->query($notificationSql)) {
                    $pusher->trigger('booking-channel', 'booking-event', $data);
                    header("Location: payment_receipt.php");
                }
            }
		}
	}
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="payment.css">
    <title>Payment Form</title>
</head>
<body>
    <div class="card p-5 w-50">
       <?php if ($paymentMode == 'gcash') { ?>
            <h3>Payment Form</h3>
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Send to:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09 **** ****" disabled value="09123456789">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="text" required class="form-control" name="amount" id="exampleInputPassword1" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mesage</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="(Optional)" rows="3"></textarea>
                </div>
                <button type="submit" name="payNow" class="btn btn-primary">Send</button>
            </form>
        <?php } ?>

        <?php if ($paymentMode == 'cash') { ?>
            <h3>Successfully Booked</h3>
            <form method="POST">
                <input type="hidden"  name="amount" placeholder="Amount" value="100">
                <button type="submit" name="payNow" class="btn btn-primary">Done</button>
            </form>
        <?php } ?>

    </div>
</body>
</html>