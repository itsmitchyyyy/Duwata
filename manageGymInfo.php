<?php
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
</head>
<style>
	a {
      text-decoration: none;
      color: #262626;
    }
</style>
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
                    <a href="transac.html"><i class="bi bi-bookmark-fill"></i></a>
                    <a href="messageContacts.html"><i class="bi bi-chat-left-dots-fill"></i></a>
                    <a href="#"><i class="bi bi-bell-fill"></i></a>
                </div>
            </nav>
			<div class="container-fluid d-flex justify-content-center align-items-center">
				<div class="edit-profile row">
					<div class="col">
						<br style="line-height:2">
						<a href="home.html" ><i style="float:left; color: black;" class="bi bi-arrow-left"></i></a>
						<br><br style="line-height:1">
						<h3>YMCA HOSTEL CEBU</h3><br>
						<div class="imgBox">
							<img src="miko.jpg">
						</div>
						<p class="price">Price: 500</p>
						<h5 class="gymDetails">Details:</h5>
						<p class="details">
						<i class="bi bi-person-fill"></i> Kenru Azazil <br>
						<i class="bi bi-envelope-fill"></i> kenru@gmail.com <br>
						<i class="bi bi-telephone-fill"></i> 09253156323 <br>
						<i class="bi bi-geo-alt-fill"></i> 51 Osmena Blvd Cebu City 
						</p><br>
						
						<!-- Calendar -->
						<div class="center-container">
						<div class="calendar">
						  <div class="calendar__picture">
							<h3>November 2023</h3>
						  </div>
						  <div class="calendar__date">
							<div class="calendar__day">S</div>
							<div class="calendar__day">M</div>
							<div class="calendar__day">T</div>
							<div class="calendar__day">W</div>
							<div class="calendar__day">T</div>
							<div class="calendar__day">F</div>
							<div class="calendar__day">S</div>
							<div class="calendar__number"></div>
							<div class="calendar__number"></div>
							<div class="calendar__number"></div>
							<div class="calendar__number"><a href="manageBookingTime.html">1</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">2</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">3</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">4</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">5</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">6</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">7</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">8</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">9</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">10</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">11</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">12</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">13</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">14</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">15</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">16</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">17</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">18</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">19</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">20</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">21</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">22</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">23</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">24</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">25</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">26</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">27</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">28</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">29</a></div>
							<div class="calendar__number"><a href="manageBookingTime.html">30</a></div>
						  </div>
						</div>
					  </div>
					  <br><br>
					  
					  
					<h5>Minimap</h5>
					<div class="imgBox">
						<img src="images/ymca2.jpg">
					</div>
					<br><br>
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
