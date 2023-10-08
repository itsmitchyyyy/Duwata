<?php
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
	</style>
	<body>
	<div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="edit-profile row">
        <div class="col">
		<br style="line-height:2">
		<a href="manageGymInfo.php"><i class="bi bi-arrow-left"></i></a>
		<br><br style="line-height:1">
			<center>
			<h2 class="bookingTime">Manage Booking<br> Time</h2>
			<br><br style="line-height:4">
			<h4 class="date">APRIL 3, 2023</h4>
			<br><br>
			</center>
			<p><button class="addTime" data-toggle="modal" data-target="#addTimeModal"><i class="bi bi-plus-square-fill" style="color:green"></i></button> Add Time Schedule</p>
			
			<label class="timeSched"> Morning Schedule - AM </label>
			<br><br>
			<div class="column1">
				<p>6:00 - 7:00</p>
			</div>
			<div class="column2">
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" role="switch" checked>
				</div>
			</div>
			
			<label class="timeSched"> Afternoon Schedule - PM </label>
			<br><br>
			<div class="column1">
				<p>3:00 - 4:00</p>
			</div>
			<div class="column2">
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" role="switch" checked>
				</div>
			</div>
			
			<label class="timeSched"> Evening Schedule - PM </label>
			<br><br>
			<div class="column1">
				<p>9:00 - 10:00</p>
			</div>
			<div class="column2">
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" role="switch" checked>
				</div>
			</div>
			<center><br><br style="line-height:7">
			<button class="save">Save</button>
			</center>
			<br>
			<!-- Modal -->
				<div class="modal fade" id="addTimeModal">
				  <div class="modal-dialog">
					<div class="modal-content">      
					  <div class="modal-body">
						<form>
						  <div class="form-group">
							<div class="clock">
								<div id="time-selector">
									<div class="time-input">
										<select class="timeSelect" id="hour-select">
											<option value="01">01</option>
											<option value="01">02</option>
											<option value="01">03</option>
											<option value="01">04</option>
											<option value="01">05</option>
											<option value="01">06</option>
											<option value="01">07</option>
											<option value="01">08</option>
											<option value="01">09</option>
											<option value="01">10</option>
											<option value="01">11</option>
											<option value="01">12</option>
										</select>
									</div>
									<div class="time-input">
										<select class="timeSelect" id="minute-select">
										</select>
									</div>
									<div class="time-input">
										<select class="timeSelect" id="ampm-select">
											<option value="AM">AM</option>
											<option value="PM">PM</option>
										</select>
									</div><br>
									<button id="set-time-button">Set Time</button>
								</div>
							</div>

							<script>
							var minuteSelect = document.getElementById("minute-select");

							for (var i = 0; i <= 59; i++) {
								var minuteValue = (i < 10) ? "0" + i : i.toString();
								var minuteOption = document.createElement("option");
								minuteOption.value = minuteValue;
								minuteOption.textContent = minuteValue;
								minuteSelect.appendChild(minuteOption);
							}
							</script>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
        </div>
      </div>
	</div>
	</body>
</html>