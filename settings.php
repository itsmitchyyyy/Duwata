<?php

require('dbconn.php');

$ID = $_GET['userid'];
$fetch = "SELECT * FROM users WHERE userid='$ID'";
$result = mysqli_query($conn, $fetch);




?>
<!DOCTYPE html>
<head>
    <title>Settings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https//unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
  border-radius: 50px;
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
</head>
<body>
   <div class="container-fluid d-flex justify-content-center">
      <div class="edit-profile row">
        <div class="col">
          <h2>Edit Profile</h2>
          <div class="arrow">
          <a href="home.php?userid=<?php echo $ID; ?>"><i class="bi bi-arrow-left-short"></i></a>
          </div>

          <form method="POST" action="upload_userimage.php?userid=<?php echo $ID; ?>" enctype="multipart/form-data">
          <?php 
           while($row=mysqli_fetch_assoc($result)){
           ?>
           <div class="edit-profile1">
            <img src="user_image/<?php echo $row['user_picture']; ?>">
           </div>
            <label class="edit-img-1 rounded">Edit Image</label>
            <input type="file" name="user_picture"  accept="image/*">
            <button>Submit</button>
            <?php
                  
                }
                  ?>
          </form>  
            <div class="changes">
              <div class="ic d-flex justify-content-start ">
              <a href="changename.php?userid=<?php echo $ID; ?>"><i class="bi bi-pencil-fill"></i>Change Name</a>
              </div>
              <span></span>
              <div class="d-flex justify-content-start">
              <a href="changemail.php?userid=<?php echo $ID; ?>"><i class="bi bi-envelope-fill"></i>Change Email</a>
              </div>
              <div class="d-flex justify-content-start">
              <a href="changepass.php?userid=<?php echo $ID; ?>"><i class="bi bi-shield-lock-fill"></i>Change Password</a>
              </div>
              <div class="d-flex justify-content-start">
              <a href="changeloc.php?userid=<?php echo $ID; ?>"><i class="bi bi-geo-alt-fill"></i>Change Location</a>
              </div>
            </div><br><br><br><br><br><br>
        </div>
      </div>
   </div>
   <script>
    var file = document.getElementById("inImg")
    var img = document.getElementById("image")
    file.addEventListener("change",(e)=>{
        img.src = URL.createObjectURL(e.target.files[0])
    })
</script>

</body>
</html>