<?php

require('dbconn.php');

$playID = $_GET['playerID'];
$fetch = "SELECT * FROM players WHERE playerID='$playID'";
$playerresult = mysqli_query($conn, $fetch);
$row = mysqli_num_rows($playerresult);

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
	<link rel="stylesheet" href="sportsChoices.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 
</head>
<style>

</style>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white border" id="sidebar-wrapper">
            <div class="setting d-flex justify-content-end">
                <a href="settings.php?playerID=<?php echo $playID ?>"><img src="images/setting.png"></a>
            </div>
            <?php 
             while($row=mysqli_fetch_assoc($playerresult)){
            ?>
           
            <div class="sidebar-heading d-flex justify-content-center align-items-center">
                <div>
                    <img class="img-profile" src="player_picture/<?php echo $row ['player_picture']?>">
                </div>
            </div>         
            <!--sidebar Content -->
            <div class="list-group">
                <div class="d-flex justify-content-between align-items-center border-top">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group" value="<?php echo $row['player_firstname']?>">Name:</small>
					<label class="fw-bold" for="<?php echo $row['player_firstname'];?>"><?php echo $row['player_firstname']?></label>
                    </div>         
                </div>    
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group" value="<?php echo $row['player_gender']?>">Gender:</small>
					<label class="fw-bold" for="<?php echo $row['player_gender'];?>"><?php echo $row['player_gender']?></label>
                    </div>          
                </div>   

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group" value="<?php echo $rowp['player_phonenumber']?>">Mobile Number:</small>
                    <label class="fw-bold" for="<?php echo $row['player_phonenumber']?>"><?php echo $row['player_phonenumber']?></label>
                    </div>          
                </div>   
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group" value="<?php echo $row['player_email']?>">Email:</small>
                    <label class="fw-bold" for="<?php echo $row['player_email']?>"><?php echo $row['player_email']?></label>
                    </div>  
                </div>   

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group" value="<?php echo $row['player_birthdate']?>">Birth Date:</small>
                    <label class="fw-bold" for="<?php echo $rowp['player_birthdate']?>"><?php echo $row['player_birthdate']?></label>
                    </div>          
                </div>   

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-4 ms-4">
                    <small for="inputFname" class="list-group" value="<?php echo $row['player_address']?>">Address:</small>
                    <label class="fw-bold" for="<?php echo $row['player_address']?>"><?php echo $row['player_address']?></label>
                    </div>         
                </div>     
                <a href="#" class="mt-4 ms-4 text-danger fw-bold"><i
                        class="fas fa-power-off me-2 mb-3"></i>Logout</a>
            </div>
            <?php 
                    }
            ?>
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
                    <a href="#"><i class="bi bi-bell-fill"></i></a>
                </div>
            </nav>
			<div class="container-fluid d-flex justify-content-center align-items-center">
                
				<div class="edit-profile row">
					<ul id="sportsList">
						<a href="listOfVenues.php">
						  <li class="sport" id="basketball">
                              basketball
						  </li>
						</a>
					</ul>
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