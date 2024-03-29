<?php

  require("dbconn.php");

  $playID = $_GET['playerID'];
  $fetch = "SELECT * FROM players WHERE playerID='$playID'";
  $playerresult = mysqli_query($conn, $fetch);
  $row = mysqli_num_rows($playerresult);

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
</head>
<body>
   <div class="container-fluid d-flex justify-content-center">
      <div class="edit-profile row">
        <div class="col">
          <h2>Edit Profile</h2>
          <div class="arrow">
            <a href="sportschoices.php?playerID=<?php echo $playID?>"><i class="bi bi-arrow-left-short"></i></a>
          </div>
          <form>
          <?php 
           while($row=mysqli_fetch_assoc($playerresult)){
           ?>
           <div class="edit-profile1">
            <img src="player_picture/<?php echo $row['player_picture']?>" >
           </div>
           <?php }?>
            <label class="edit-img-1 rounded">Edit Image
            <input id="inImg" type="file" style="display: none;">
            </label>
            <div class="changes">
              <div class="ic d-flex justify-content-start ">
                <a href="changename.php?playerID=<?php echo $playID?>"><i class="bi bi-pencil-fill"></i>Change Name</a>
              </div>
              <span></span>
              <div class="d-flex justify-content-start">
                <a href="changemail.php?playerID=<?php echo $playID?>"><i class="bi bi-envelope-fill"></i>Change Email</a>
              </div>
              <div class="d-flex justify-content-start">
                <a href="changepass.php?playerID=<?php echo $playID?>"><i class="bi bi-shield-lock-fill"></i>Change Password</a>
              </div>
              <div class="d-flex justify-content-start">
                <a href="changeloc.php?playerID=<?php echo $playID?>"><i class="bi bi-geo-alt-fill"></i>Change Location</a>
              </div>
            
          </form>
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