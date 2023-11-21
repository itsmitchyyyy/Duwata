

<?php 
session_start();


require("dbconn.php");
require  '../vendor/autoload.php';


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

if (isset($_GET['gymId'])) {

    $gymId = $_GET['gymId'];
  
    $fetch = "SELECT * FROM gym WHERE gym_id = '".$gymId."'";
    $gyms = mysqli_query($conn, $fetch);
    $row = mysqli_fetch_assoc($gyms);
}

$selectedDate = date('F j, Y', strtotime($_GET['date']));
$sql = "SELECT * FROM schedule WHERE schedule.date = '".$_GET['date']."'";
$result = mysqli_query($conn, $sql);
$scheduleRow = mysqli_fetch_assoc($result);


$scheduleTimeRow = [];
if (isset($scheduleRow)) {
	$scheduleTimeSql = "SELECT * FROM schedule_time WHERE schedule_id = ".$scheduleRow['id'];
	$scheduleTimeResult = mysqli_query($conn, $scheduleTimeSql);
	$scheduleTimeRow = $scheduleTimeResult->fetch_all(MYSQLI_ASSOC);
}

if (isset($_POST['bookNow']) || isset($_POST['schedule_time_id'])) {
	$scheduleTimeId = $_POST['schedule_time_id'];
	$bookingScheduleInsertSql = "INSERT INTO booking_schedule (schedule_time_Id, playerId) VALUES('".$scheduleTimeId."', '".$_SESSION['player_id']."')";
	if ($conn->query($bookingScheduleInsertSql)) {

		$updateScheduleTimeSql = "UPDATE schedule_time SET status = 'booked' WHERE id = ".$scheduleTimeId;
		if ($conn->query($updateScheduleTimeSql)) {
			$data['message'] = 'There is a new booking';
			$pusher->trigger('booking-channel', 'booking-event', $data);
			header("Location: viewGymInfo.php?sportName=".$_GET['sportName']."&gymId=".$gymId);
		}
	}
}

$conn->close();

?>

<html>
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="chooseBookingTime.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
	<!-- Bootstrap Font Icon CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container-fluid d-flex justify-content-center align-items-center">
		<div class="edit-profile row">
			<div class="col">
				<br style="line-height:2">
				<a href="viewGymInfo.php?sportName=<?php echo $_GET['sportName'] ?>&gymId=<?php echo $gymId ?>"><i class="bi bi-arrow-left"></i></a>
				<br><br style="line-height:1">
				<center>
				<h3><?php echo $row['gym_name'] ?></h3>
				<br>
				<h5 class="date"><?php echo $selectedDate ?></h5>
				<br><br>
				</center>
				<label class="timeSched">Available Schedules</label>
				<br>
				<form method="post">
				<?php foreach($scheduleTimeRow as $scheduleTime) { ?>
					<div class="time-slot">
						<span><?php echo date('H:i',strtotime($scheduleTime['time_start']))  ?> - <?php echo date('H:i',strtotime($scheduleTime['time_end']))  ?></span>
						<input type="radio" name="schedule_time_id" value="<?php echo $scheduleTime['id'] ?>" <?php echo $scheduleTime['status'] == 'booked' ? 'disabled' : '' ?>>
					</div>
				<?php } ?>
				<br><br>
				
					<input type="submit" name="bookNow" class="continue" value="Book now" />
				</form>
				</center>
			</div>
		</div>
	</div>
	</body>
</html>