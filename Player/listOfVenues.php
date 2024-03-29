<?php 

require('dbconn.php');
if (isset($_GET['sportName'])) {

    $sportName = $_GET['sportName'];

    $fetch = "SELECT * FROM gym WHERE gym_sports='$sportName'";
    $gyms = mysqli_query($conn, $fetch);
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
	<link rel="stylesheet" href="listOfVenues.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

<style>
	a {
      text-decoration: none;
      color: #262626;
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
                <a href="settings.php"><img src="images/setting.png"></a>
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
                    <label class="fw-bold" id="">Jezel T. lahoylahoy</label>
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
                    <a href="transac.php"><i class="bi bi-bookmark-fill"></i></a>
                    <a href="messageContacts.php"><i class="bi bi-chat-left-dots-fill"></i></a>
                    <a href="notification.php?userid=<?php echo $ID; ?>"><i class="bi bi-bell-fill" id="notificationBell">
                      <span class="notificationCounter" id="notificationCounter"></span>
                    </i></a>
                </div>
            </nav>
			<div class="container-fluid d-flex justify-content-center align-items-center">
                
				<div class="edit-profile row">
					<div class="col">
						<br style="line-height:2">
                        <?php while($rows=mysqli_fetch_array($gyms)) { ?>
                            <a href="viewGymInfo.php?sportName=<?php echo $_GET['sportName'] ?>&gymId=<?php echo $rows['gym_id'] ?>" class="aHREF">
							<div id="gymBox">
								<div id="gymImgBox">
									<img src="tabletennis.jpg">
								</div>
								<p>Price: 500</p>
                                <label id="gymName"><?php echo $rows['gym_name'] ?></label>
								<i class="bi bi-circle-fill" id="status"></i><br>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<br><br>
								<p class="gymInfo">Address: 51 Osmeña BLVD, Cebu City, Cebu<br>
								Phone: (032) 253 4057</p>
							</div>
						</a>

                        <?php } ?>
						<!-- <a href="viewGymInfo.php" class="aHREF">
							<div id="gymBox">
								<div id="gymImgBox">
									<img src="tabletennis.jpg">
								</div>
								<p>Price: 500</p>
                                <label id="gymName">YMCA HOSTEL CEBU</label>
								<i class="bi bi-circle-fill" id="status"></i><br>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<br><br>
								<p class="gymInfo">Address: 51 Osmeña BLVD, Cebu City, Cebu<br>
								Phone: (032) 253 4057</p>
							</div>
						</a>
						<br>
						<a href="viewGymInfo.php" class="aHREF">
							<div id="gymBox">
								<div id="gymImgBox">
									<img src="basketball.jpg">
								</div>
								<p>Price: 500</p>
                                <label id="gymName">CEBU CITY SPORTS CENTER</label>
								<i class="bi bi-circle-fill" id="status"></i><br>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<i class="bi bi-star"></i>
								<br><br>
								<p class="gymInfo">Address: 51 Osmeña BLVD, Cebu City, Cebu<br>
								Phone: (032) 253 4057</p>
							</div>
						</a> -->
					</div>
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