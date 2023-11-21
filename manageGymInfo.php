<?php

require('dbconn.php');

$ID = $_GET['userid'];
$gymID = $_GET['gym_id'];
$selectgym = "SELECT * FROM gym WHERE gym_id={$gymID}";
$gymresult = mysqli_query($conn, $selectgym);
$row = mysqli_num_rows($gymresult);



$sql = "SELECT date FROM schedule WHERE status = 'open'";
$result = mysqli_query($conn, $sql);
$bookedDates = array();
$resultRow = mysqli_num_rows($result);
if ($resultRow > 0) {
    while ($bookRow = mysqli_fetch_assoc($result)) {
        $bookedDates[] = $bookRow['date'];
    }
}

?>
<!DOCTYPE html>
<head>
    <title>Gym Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="manageGymInfo.css">
    <link rel="icon" href="images/duwata.png">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
     <script>
         $(document).ready(function(){
            $(".notification_icon .bi-bell").click(function(){
                $(".dropdown").toggleClass("active");
            });
        });
     </script>
     <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
      <script>
        $(function () {
         
          var pusher = new Pusher('e46647b2f0c1a7819b8f', {
            cluster: 'ap1'
          });

          var channel = pusher.subscribe('booking-channel');
          channel.bind('booking-event', function(data) {
            $('#notificationBell').addClass('notificationActive');
            var counter = $('#notificationCounter').html();

            $('#notificationCounter').html(Number(counter) + 1);
          });
        })

        
      </script>

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
                    window.location.href = 'manageBookingTime.php?date=' + selectedDate + '&gymId=<?php echo $gymID ?>&userid=<?php echo $ID ?>';
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
	a {
      text-decoration: none;
      color: #262626;
    }

    .ui-datepicker-calendar td.fully-booked a {
            pointer-events: none;
            opacity: 0.6;
        }

        .calendar-container {
            display: flex;
    justify-content: center;
    flex-direction: column;
    margin-bottom: 5em;
        }

        #calendar {
            display: flex;
            justify-content: center;
        }

      .gym-container {
        text-align: center;
        width: 50%;
        padding: 10px;
      }

      .notificationCounter {
        position: absolute;
        color: white;
        top: 12px;
        right: 41px;
        bottom: 0;
        border-radius: 50%;
        font-size: 12px;
        font-weight: 600;
      }

      .notificationActive {
        color: red;
      }
</style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white border" id="sidebar-wrapper">
            <div class="setting d-flex justify-content-end">
                <a href="settings.php?userid=<?php echo $ID; ?>"><img src="images/setting.png"></a>
            </div>
            <div class="sidebar-heading d-flex justify-content-center align-items-center">
                <div>
                    <img class="img-profile" src="img/image.png">
                </div>
            </div>

            <!--sidebar Content -->
            <div class="list-group">
                <div class="d-flex justify-content-between align-items-center border-top">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group">Name:</small>
                    <label class="fw-bold" id=""></label>
                    </div>         
                </div>    
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group">Gender:</small>
                    <label class="fw-bold" id="">Female</label>
                    </div>          
                </div>   

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group">Mobile Number:</small>
                    <label class="fw-bold" id="">09123456789</label>
                    </div>          
                </div>   
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group">Email:</small>
                    <label class="fw-bold" id="">lahoylahoy.jezel18@gmail.com</label>
                    </div>  
                </div>   

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group">Birth Date:</small>
                    <label class="fw-bold" id="">12/04/2000</label>
                    </div>          
                </div>   

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group">Address:</small>
                    <label class="fw-bold" id="">Peir 3</label>
                    </div>         
                </div>     
                <a href="#" class="mt-4 ms-4 text-danger fw-bold"><i
                        class="fas fa-power-off me-2 mb-3"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
            
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar justify-content-between navbar-expand-lg py-3 px-4 ">
                <div>
                    <i class="fas fa-solid fa-bars primary-text fs-4 me-3" id="menu-toggle"></i>
                </div>
                <div class="notif d-flex">
                    <a href="transac.php?userid=<?php echo $ID; ?>"><i class="bi bi-bookmark-fill"></i></a>
                    <a href="messageContacts.php?userid=<?php echo $ID; ?>"><i class="bi bi-chat-left-dots-fill"></i></a>
                    <a href="notification.php?userid=<?php echo $ID; ?>"><i class="bi bi-bell-fill" id="notificationBell">
                      <span class="notificationCounter" id="notificationCounter"></span>
                    </i></a>
                </div>
            </nav>
                       

			<div class="container-fluid d-flex justify-content-center align-items-center">
				<div class="gym-container row">
                
					<div class="col">
                    <?php
                        
                        if($row > 0) {
							while($row = mysqli_fetch_array($gymresult)) {
                        
                        ?>
						<br style="line-height:2">
						<a href="home.php?userid=<?php echo $ID; ?>" ><i style="float:left; color: black;" class="bi bi-arrow-left"></i></a>
						<br><br style="line-height:1">
                        <a href="editgyminfo.php"><i style="float:right; color: black;" class="bi bi-pencil-fill"></i></a>
						<h3><?php echo $row['gym_name']; ?></h3><br>
						<div class="imgBox">
							<img src="gym_picture/<?php echo $row['gym_picture']?>">
						</div><br>
						<p class="price">Price:<?php echo $row['gym_price']?></p><br>
						<h5 class="gymDetails">Details:</h5>
						<p class="details">
						<i class="bi bi-person-fill"></i><?php echo $row['gym_contactperson']?> <br>
						<i class="bi bi-envelope-fill"></i> <?php echo $row['gym_email']?> <br>
						<i class="bi bi-telephone-fill"></i> <?php echo $row['gym_contactnumber']?><br>
						<i class="bi bi-geo-alt-fill"></i> <?php echo $row['gym_location']?>
						</p>
                        </div>
						
                        <div class="calendar-container">
                            <h5>Calendar</h5>
                            <div id="calendar"></div>
					    </div>
					<h5>Minimap</h5>
					<div class="imgBox">
						<img src="gym_map/<?php echo $row['map_picture']?>">
					</div>
                    <?php 
                            
                        } }
                        ?>
				</div>
			</div>
        </div>
    </div>

                     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>
