<?php

require('dbconn.php');

$playID = $_GET['playerID'];
$fetch = "SELECT * FROM players WHERE playerID='$playID'";
$playerresult = mysqli_query($conn, $fetch);
$row = mysqli_num_rows($playerresult);

?>
<!DOCTYPE html>
<head>
    <title>Change Password</title>
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
    <div class="container-fluid">
        <div class="container-fluid ">
            <div class="edit-name row">
              <div class="col">
               <div class="center">
                <div class="arrow1">
                <a href="settings.php?playerID=<?php echo $playID?>"><i class="bi bi-arrow-left-short"></i></a>
                </div>
                <h1>CHANGE PASSWORD</h1>
                <?php 
		
                    if($row > 0) {
                    while($row = mysqli_fetch_array($playerresult)) {	 
                ?>
                <form method="POST" action="changepassback.php?playerID=<?php echo $playID?>">
                 <div class="txt_field">
                    <input type="text" name="player_password" value="<?php echo $row['player_password']?>" required>
                    <span></span>
                    <label>Password:</label>
                  </div>
                  <div class="save-btn">
                  <input type="submit" value="Save">
                  </div>
                </form>
                <?php 
                }}
                ?>
               </div>
              </div>
            </div>
         </div> 
</body>
</html>