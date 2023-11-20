

<?php 
require("dbconn.php");

$sql = "SELECT * FROM schedule WHERE schedule.date = '".$_GET['date']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$scheduleTimeRow = [];
if (isset($row)) {
	$scheduleTimeSql = "SELECT * FROM schedule_time WHERE schedule_id = '".$row['id']."'";
	$scheduleTimeResult = mysqli_query($conn, $scheduleTimeSql);
	$scheduleTimeRow = $scheduleTimeResult->fetch_all(MYSQLI_ASSOC);
}

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
				<a href="viewGymInfo.php"><i class="bi bi-arrow-left"></i></a>
				<br><br style="line-height:1">
				<center>
				<h3>YMCA HOSTEL CEBU</h3>
				<br>
				<h5 class="date">NOVEMBER 3, 2023</h5>
				<br><br>
				</center>
				<label class="timeSched"> Morning Schedule - AM </label>
				<br>
				
				<div class="time-slot">
				  <span>6:00 - 7:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>7:00 - 8:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>8:00 - 9:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>9:00 - 10:00</span>
				  <input type="checkbox">
				</div>
				<br><br>
				
				<label class="timeSched"> Afternoon Schedule - PM </label>
				<br>
				<div class="time-slot">
				  <span>1:00 - 2:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>2:00 - 3:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>3:00 - 4:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>4:00 - 5:00</span>
				  <input type="checkbox">
				</div>
				<br><br>
				
				<label class="timeSched"> Evening Schedule - PM </label>
				<br>
				<div class="time-slot">
				  <span>6:00 - 7:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>7:00 - 8:00</span>
				  <input type="checkbox">
				</div>
				<div class="time-slot">
				  <span>8:00 - 9:00</span>
				  <input type="checkbox">
				</div>
				<br><br>
				
				<center>
				<h4>Provide Payment</h4>
				
				<button class="continue">Continue</button>
				</center>
				<br><br>
			</div>
		</div>
	</div>
	</body>
</html>