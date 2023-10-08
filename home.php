<?php
?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script>
         $(document).ready(function(){
            $(".notification_icon .bi-bell").click(function(){
                $(".dropdown").toggleClass("active");
            });
        });
     </script>
</head>
<style>

</style>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white border" id="sidebar-wrapper">
            <div class="setting d-flex justify-content-end">
                <a href="settings.html"><img src="images/setting.png"></a>
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
                    <a href="notification.html"><i class="bi bi-bell-fill"></i></a>
                </div>
            </nav>
			<div class="container-fluid d-flex justify-content-center align-items-center">
				<div class="edit-profile row">
					<div class="col">
						<br style="line-height:6">
						<a href="createVenue.html"class="aHREF">
							<div class="gymBox">
                                <i id="addGymIcon" class="bi bi-plus-circle"></i>	
							<br><br>
								<label class="gymLabel">Add Gym</label>
							</div>
						</a>
                        <br>
						<a href="manageGymInfo.html" class="aHREF">
							<div class="gymBox">
								<div class="gymImgBox">
									<img src="images/ymca.jpg">
								</div><br>
                                <label class="gymLabel">YMCA HOSTEL CEBU</label>
							</div>
						</a>

                        <div class="dropdown">
                            <div class="notify_item">
                                <div class="notify_info">
                                    <p>Jezel Booked a Venue</p>
                                    <span class="notify_time">2 minutes ago</span>
                                </div>
                            </div>
                            <div class="notify_item">
                                <div class="notify_info">
                                    <p>John Booked a Venue</p>
                                    <span class="notify_time">10 minutes ago</span>
                        </div>
                        
                        </div>
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