<?php

	require("dbconn.php");

	
	$gymID = $_GET['gymId'];
	$selectedDate = date('F j, Y', strtotime($_GET['date']));
	$sql = "SELECT * FROM schedule WHERE gym_id = '".$gymID."' AND schedule.date = '".$_GET['date']."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$scheduleTimeRow = [];
	if (isset($row)) {
		$scheduleTimeSql = "SELECT * FROM schedule_time WHERE schedule_id = '".$row['id']."'";
		$scheduleTimeResult = mysqli_query($conn, $scheduleTimeSql);
		$scheduleTimeRow = $scheduleTimeResult->fetch_all(MYSQLI_ASSOC);
	}

	if (isset($_POST['submit']) || isset($_POST['startTime']) || isset($_POST['startEnd'])) {

		$startTime = $_POST['startTime'];
		$startEnd = $_POST['startEnd'];


		if (isset($scheduleTimeRow[0])) {
			$scheduleTimeInsertSql = "INSERT INTO schedule_time (schedule_id, time_start, time_end) VALUES('".$row['id']."', '".$startTime."', '".$startEnd."')";
			if ($conn->query($scheduleTimeInsertSql)) {
				echo "<meta http-equiv='refresh' content='0'>";
			}
		} else {
			$scheduleInsertSql = "INSERT INTO schedule (gym_id, date, status) VALUES('".$gymID."', '".$_GET['date']."', 'open')";
			if ($conn->query($scheduleInsertSql)) {
				$scheduleTimeInsertSql = "INSERT INTO schedule_time (schedule_id, time_start, time_end) VALUES('".$conn->insert_id."', '".$startTime."', '".$startEnd."')";
				if ($conn->query($scheduleTimeInsertSql)) {
					echo "<meta http-equiv='refresh' content='0'>";
				}
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
	<link rel="stylesheet" href="manageBookingTime.css">
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
	<style>
		.modal-body,.modal-content{
			background-color: #333;
			border-radius:15px;
		}

		.schedule-container {
			display: flex;
			flex-direction: column;
		}

		.schedule-wrapper {
			display: flex;
			flex-direction: row;
		}

		.schedule-time {
			display: flex; 
			flex: 1;
		}

		.schedule-check {
			display: flex; 
			flex: 1;
			justify-content: flex-end;
		}


	</style>
	<body>
	<div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="edit-profile row">
        <div class="col">
		<br style="line-height:2">
		<a href="manageGymInfo.php?userid=<?php echo $_GET['userid'] ?>"><i class="bi bi-arrow-left"></i></a>
		<br><br style="line-height:1">
			<center>
			<h2 class="bookingTime">Manage Booking<br> Time</h2>
			<br><br style="line-height:4">
			<h4 class="date"><?php echo $selectedDate ?></h4>
			<br><br>
			</center>
			<p><button class="addTime" data-toggle="modal" data-target="#addTimeModal"><i class="bi bi-plus-square-fill" style="color:green"></i></button> Add Time Schedule</p>
			
			
			<div class="schedule-container">
				<label class="timeSched">Schedules</label>
				<?php foreach($scheduleTimeRow as $scheduleTime) { ?>
					<div class="schedule-wrapper">
						<div class="schedule-time">
							<p><?php echo date('H:i',strtotime($scheduleTime['time_start']))  ?> - <?php echo date('H:i',strtotime($scheduleTime['time_end']))  ?></p>
						</div>
						<!-- <div class="schedule-check">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" <?php echo $scheduleTime['status'] == 'open' ? 'checked' : '' ?>>
							</div>
						</div> -->
					</div>
				<?php } ?>
			</div>
			
			
			<br>
			<!-- Modal -->
				<div class="modal fade" id="addTimeModal">
				  <div class="modal-dialog">
					<div class="modal-content">      
					  <div class="modal-body">
						<form method="post">
						  <div class="form-group">
							<div class="clock">
								<div id="time-selector">
									<div class="time-input">
										<select class="timeSelect" name="startTime" id="start_time">
											<option value="6:00" selected>6:00</option>
											<option value="7:00">7:00</option>
											<option value="8:00">8:00</option>
											<option value="9:00">9:00</option>
											<option value="10:00">10:00</option>
											<option value="11:00">11:00</option>
											<option value="12:00">12:00</option>
											<option value="13:00">13:00</option>
											<option value="14:00">14:00</option>
											<option value="15:00">15:00</option>
											<option value="16:00">16:00</option>
											<option value="17:00">17:00</option>
											<option value="18:00">18:00</option>
											<option value="19:00">19:00</option>
											<option value="20:00">20:00</option>
											<option value="21:00">21:00</option>
											<option value="22:00">22:00</option>
											<option value="23:00">23:00</option>
											<option value="24:00">24:00</option>
										</select>
									</div>
									to &nbsp;&nbsp;
									<div class="time-input">
										<select class="timeSelect" name="startEnd" id="start_end">
											<option value="6:00" selected>6:00</option>
											<option value="7:00">7:00</option>
											<option value="8:00">8:00</option>
											<option value="9:00">9:00</option>
											<option value="10:00">10:00</option>
											<option value="11:00">11:00</option>
											<option value="12:00">12:00</option>
											<option value="13:00">13:00</option>
											<option value="14:00">14:00</option>
											<option value="15:00">15:00</option>
											<option value="16:00">16:00</option>
											<option value="17:00">17:00</option>
											<option value="18:00">18:00</option>
											<option value="19:00">19:00</option>
											<option value="20:00">20:00</option>
											<option value="21:00">21:00</option>
											<option value="22:00">22:00</option>
											<option value="23:00">23:00</option>
											<option value="24:00">24:00</option>
										</select>
									</div>
									
									<input type="submit" name="submit" id="set-time-button" value="Set Time" />
								</div>
							</div>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
        </div>
      </div>
	</div>

	<script>
			$(function () {
				var startTimeValue = 6;
				var startEndValue = 6;
				$('#start_time').change(function (e) {
					startTimeValue = Number($(this).val().split(":")[0]);

					// var startEndValue = $('#start_end').val();

					$('#start_end option').each(function () {
						var startEndValueOption = Number($(this).val().split(":")[0]);
						$(this).prop('disabled', startEndValueOption <= startTimeValue);
					});
				});

				$('#start_end').change(function (e) {
					startEndValue = Number($(this).val().split(":")[0]);

					// var startEndValue = $('#start_end').val();

					$('#start_time option').each(function () {
						var startTimeValueOption = Number($(this).val().split(":")[0]);
						$(this).prop('disabled', (startEndValue <= startTimeValueOption));
					})
				})
			})
		</script>
	</body>
</html>