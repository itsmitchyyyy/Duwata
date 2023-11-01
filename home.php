<?php

require('dbconn.php');

$ID = $_GET['userid'];
$fetch = "SELECT * FROM users WHERE userid={$ID}";
$result = mysqli_query($conn, $fetch);
$row = mysqli_num_rows($result);

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
            <a href="settings.php?userid=<?php echo $ID; ?>"><img src="images/setting.png"></a>
            </div>
            <div class="sidebar-heading d-flex justify-content-center align-items-center">
                <div>
                    <img class="img-profile" src="img/image.png">
                </div>
            </div>

            <!--sidebar Content -->
            <div class="list-group">
									<?php 
		
							if($row > 0) {
							while($row = mysqli_fetch_array($result)) {	 
							
							
					?>
					<div class="d-flex justify-content-between align-items-center border-top">
						<div class="mt-4 ms-4">
						<small for="inputFname" class="list-group" value="<?php echo $row['user_firstname']?>">Name:</small>
							<label class="fw-bold" for="<?php echo $row['user_firstname'];?>"><?php echo $row['user_firstname']?></label>
						</div>         
					</div>    
					<div class="d-flex justify-content-between align-items-center">
						<div class="mt-4 ms-4">
						<small for="inputFname" class="list-group" value="<?php echo $row['user_gender']?>">Gender:</small>
						<label class="fw-bold" for="<?php echo $row['user_gender'];?>"><?php echo $row['user_gender']?></label>
						</div>          
					</div>   

					<div class="d-flex justify-content-between align-items-center">
						<div class="mt-4 ms-4">
						<small for="inputFname" class="list-group" value="<?php echo $row['user_phonenumber']?>">Mobile Number:</small>
						<label class="fw-bold" for="<?php echo $row['user_phonenumber'];?>"><?php echo $row['user_phonenumber']?></label>
						</div>          
					</div>   
					<div class="d-flex justify-content-between align-items-center">
						<div class="mt-4 ms-4">
						<small for="inputFname" class="list-group" value="<?php echo $row['user_email']?>">Email:</small>
						<label class="fw-bold" for="<?php echo $row['user_email']; ?>"><?php echo $row['user_email']?></label>
						</div>         
					</div>   

					<div class="d-flex justify-content-between align-items-center">
						<div class="mt-4 ms-4">
						<small for="inputFname" class="list-group" value="<?php echo $row['user_birthdate']?>">Birth Date:</small>
						<label class="fw-bold" for="<?php echo $row['user_birthdate']; ?>"><?php echo $row['user_birthdate']?> </label>
						</div>          
					</div>   

					<div class="d-flex justify-content-between align-items-center">
						<div class="mt-4 ms-4">
						<small for="inputFname" class="list-group" value="<?php echo $row ['user_address']?>">Address:</small>
						<label class="fw-bold" for="<?php echo $row['user_address']; ?>"><?php echo $row['user_address']?></label>
						</div>         
					</div> 
					<?php
		
							}		}
					?>
	                <a href="login.php" class="mt-4 ms-4 text-danger fw-bold"> 
                    <iclass="fas fa-power-off me-2 mb-3></i>Logout</a>
				</div>
			</div>
        <!-- /#sidebar-wrapper -->
            
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar justify-content-between navbar-expand-lg py-2 px-4 ">
                <div>
                    <i class="fas fa-solid fa-bars primary-text fs-4 me-3" id="menu-toggle"></i>
                </div>
                <div class="notif d-flex">
                    <a href="transac.php?userid=<?php echo $ID; ?>"><i class="bi bi-bookmark-fill"></i></a>
                    <a href="messageContacts.php?userid=<?php echo $ID; ?>"><i class="bi bi-chat-left-dots-fill"></i></a>
                    <a href="notification.php?userid=<?php echo $ID; ?>"><i class="bi bi-bell-fill"></i></a>
                </div>
            </nav>
			<div class="container-fluid d-flex justify-content-center align-items-center">
				<div class="edit-profile row">
					<div class="col">
						<br style="line-height:6">
						<a href="createVenue.php?gym_id=<?php echo $ID; ?>"class="aHREF">
							<div class="gymBox">
                                <i id="addGymIcon" class="bi bi-plus-circle"></i>	
							<br><br>
								<label class="gymLabel">Add Gym</label>
							</div>
						</a>
                        <br>
                        <?php 
                        
                            $selectgym = "SELECT * FROM gym WHERE user_id='$ID'";
                            $gymresult = mysqli_query($conn, $selectgym);
                            $row = mysqli_num_rows($gymresult);

                            if($row > 0) {
                                while($row = mysqli_fetch_array($gymresult)) {	 
                            
                                
                        ?>
						<a href="manageGymInfo.php?userid=<?php echo $ID ?>&gym_id=<?php echo $row['gym_id']?>" class="aHREF">
							<div class="gymBox">
								<div class="gymImgBox">
									<img src="images/ymca.jpg">
								</div><br>
                                <label class="gymLabel"><?php echo $row['gym_name'];?></label>
                                <h1><?php echo $row['gym_location'];?></h1>
							</div><br><br>
                           
						</a>
                            <?php
                            
                                 } 
                                }
                            ?>
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