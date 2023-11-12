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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

body{
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    margin: 0;
}
  #wrapper {
    overflow-x: hidden;
  }
  
  #sidebar-wrapper {
    min-height: 100vh;
    margin-left: -16.5rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
  }
  
  #sidebar-wrapper .sidebar-heading {
    padding: 0.875rem;
    font-size: 1.2rem;
    max-width: 100%;
    max-height: 100%;
  }
  #page-content-wrapper {
    min-width: 100vw;
  }
  
  #wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
  }
  
  #menu-toggle {
    cursor: pointer;
    color: #fff
  }
  
  .setting img{
    margin: 10px;
    width: 20px;
    height: 20px
  }

  .notif a{
    margin: 0 10px;
    font-size: 20px;
    color: white;
  }

  .notification_icon{
    margin: 0 10px;
    font-size: 20px;
    color: white;
    cursor: pointer;
  }

  .navbar{
    background: #185A56;
    width: 101%;
  }
.edit-profile {
  text-align: center;
  width: 50%;
  height: 1000px;
  padding: 10px;
}

.edit-profile1 img{
  height: 90px;
  width: 90px;
  background: #000;
  margin: 15px;
}

.changes{
  margin-top: 38px;
}

.changes a{
  color: #000;
  margin: 10px;
  padding: 10px;
  font-size: large;
  font-family: Arial;
}
.changes .bi{
  margin-right: 5px;
  width: 20px;
  height: 20px;
}

.changes .ic{
  border-bottom: 3px solid #aeaeae;
  width: 100%;
}

.edit-img-1{
  cursor: pointer;
}

.arrow .bi{
  margin-right: 80%;
  font-size: 30px;
  color: #000;
}

input[type="submit"]{
  width: 30%;
  height: 50px;
  border: 1px solid;
  background: #185A56;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700px;
  cursor: pointer;
  outline: none;
  float: center;
}
input[type="submit"]:hover{
  border-color: #185A56;
  transition: .5s;
}

.edit-name{
  text-align: center;
  width: 50%;
  height: 1000px;
  padding: 10px;

}

.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: whitesmoke;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}

.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #000;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #000;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}

.arrow1 .bi{
  color: #000;
  margin-right: 80%;
  font-size: 30px;
}

.arrow2 .bi{
  color: #000;
  margin-right: 100%;
  font-size: 30px;
}

.edit-mail{
  text-align: center;
  width: 50%;
  height: 1000px;
  padding: 10px;

}

hr{
  color: #aeaeae;
}


.check .bi{
  padding: 50px;
  color:green;
  size:50px;
  font-size:60px;
  position: absolute;
  left: 46.5%;
  bottom: 55%;
  
}


.edit-transac{
  text-align: center;
  width: 100%;
  height: 1000px;
  padding: 10px;
}

p.one{
  border-style: solid;
  border-width: 1px;
  text-align: center;
  font-size: 45px;
  background: #185A56;
  width: 85%;
  height: 90px;
  border-radius: 25px;

} 

table {
  font: piazolla;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  font: piazolla;
  border: 1px solid ;
  text-align: left;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.aHREF{
	text-decoration:none;
	color:black;
}
.gymImgBox {
  margin: 0 auto; /* Center the .imgBox horizontally */
  width: 60%; 
  text-align: center; 
  border-radius: 15px;
  display: flex; 
  align-items: center;
  justify-content: center;
}

.gymImgBox img {
  max-width: 100%; 
  max-height: 100%; 
  object-fit: contain; 
  border-radius: 15px;
}
.gymBox{
	width:70%;
  padding:30px;
  border:1px solid black;
  background-color:#D9D9D9;
  border-radius:15px;
  margin: 0 auto;
  text-align: center; 
}
.addGymButton{
  padding:0;
  border:0;
  margin:0;	
  background-color:#D9D9D9;
}
#addGymIcon{
  text-align:center;
  font-size:100px;
  color: #000;
}
.gymLabel{
  font-weight:bold;
}

.dropdown{
  width: 350px;
  height: auto;
  background: red;
  border-radius: 5px;
  box-shadow: 2px 2px 3px rgba(0,0,0,0.125);
  margin: 15px auto 0;
  padding: 15px;
  position: relative;
  display: none;
}

.dropdown .notify_item{
  border-bottom: 1px solid #dbdaff;
  padding: 10px 0;
}
.dropdown .notify_item .notify_info p span{
  color: silver;
  margin-left: 5px;
}

.dropdown .notify_item .notify_info .notify_time{
  color: #c5c5a6;
  font-size: 12px;

}
.active{
  display: block;
}

.img-profile{
    width: 100%;
    height: 100%;
    border-radius: 70px;
}
@media screen and (max-width: 768px){
      #sidebar-wrapper {
        margin-left: 0;
      }
    
      #page-content-wrapper {
        min-width: 20px;
        width: 100%;
      }
    
      #wrapper.toggled #sidebar-wrapper {
        margin-left: -16rem;
      }
      .edit-profile {
        text-align: center;
        width: 100%;
        height: 1000px;
        padding: 10px;
      }
      .center{
        text-align: center;
        width: 90%;
        max-height: 80%;
        padding: 10px;
      }
      
}
</style>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white border" id="sidebar-wrapper">
            <div class="setting d-flex justify-content-end">
            <a href="settings.php?userid=<?php echo $ID; ?>"><img src="images/setting.png"></a>
            </div>
            <?php
            
             while($row=mysqli_fetch_assoc($result)){
             
            ?>
            <div class="sidebar-heading d-flex justify-content-center align-items-center">
                <div>
                    <img class="img-profile" src="user_image/<?php echo $row['user_picture']; ?>">
                </div>
            </div>
            <!--sidebar Content -->
            <div class="list-group">
								
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
		
							}
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
						<a style="color:black;" href="createVenue.php?gym_id=<?php echo $ID; ?>"class="aHREF">
							<div class="gymBox">
                                <i id="addGymIcon" class="bi bi-plus-circle"></i>	
							<br><br>
								<label class="gymLabel">Add Gym</label>
							</div>
						</a>
                        <br>
                        <?php 
                        
                            $selectgym = "SELECT * FROM gym WHERE userid='$ID'";
                            $gymresult = mysqli_query($conn, $selectgym);
                            $row = mysqli_num_rows($gymresult);

                            if($row > 0) {
                                while($row = mysqli_fetch_array($gymresult)) {	 
                            
                                
                        ?>
						<a href="manageGymInfo.php?userid=<?php echo $ID ?>&gym_id=<?php echo $row['gym_id']?>" class="aHREF">
							<div class="gymBox" style="color:black;">
              <i style="float:right; color:red;" class="bi bi-trash-fill"></i>
								<div class="gymImgBox">
									<img src="gym_picture/<?php echo $row['gym_picture']?>">
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