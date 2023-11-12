<?php

require('dbconn.php');


$gymID = $_GET['gym_id'];
$selectgym = "SELECT * FROM gym WHERE gym_id={$gymID}";
$gymresult = mysqli_query($conn, $selectgym);
$row = mysqli_num_rows($gymresult);

?>
<!DOCTYPE html>
<head>
    <title>Create Venue</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https//unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="createVenue.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="edit-profile row">
          <div class="col">
              <div class="arrow1">
                <a href="home.php?userid=<?php echo $gymID; ?>"><i class="bi bi-arrow-left-short"></i></a>
                </div>
                <h1>Create Venue</h1>
                <form method="POST" action="createvenueback.php?userid=<?php echo $gymID; ?>" enctype="multipart/form-data">
                  <input class="venueInfo" type="text" name="gym_name" placeholder="Gym Name" required><br><br>
                  <input class="venueInfo" type="text" name="gym_location" placeholder="Location" required><br><br>
                  <input class="venueInfo" type="text" name="gym_contactperson" placeholder="Contact Person" required><br><br>
                  <input class="venueInfo" type="number" name="gym_contactnumber" placeholder="Contact No" required><br><br>
                  <input class="venueInfo" type="email" name="gym_email" placeholder="Email" required><br><br>
                  <div>
                    <select name="gym_sports" style=" border: 1px solid gray; width: 100%; height: 50px; border-radius: 25px; text-align: center;">
                              <?php
                              
                              $sports = "SELECT * FROM sports";
                              $sportresult = mysqli_query($conn, $sports);
                              
                                if($sportresult) {
                                  while($sportsrow = mysqli_fetch_assoc($sportresult)) {
                                    $sportname = $sportsrow['sport_name'];
                            ?>
                        <option value="<?php echo $sportname; ?>"><?php echo $sportname; ?></option>
                        <?php }} ?>
                    </select><br><br>
                  </div>
                  <input class="venueInfo" type="number" name="gym_price" placeholder="Price Rate" required><br><br>
                  <textarea rows="5" class="venueInfo1" type="text" name="gym_rules" placeholder="Rules and Regulation" required></textarea>
                  <div id="column">
                    <label id="addPhotoLabel">Add Photo</label><br>
                      <div class="file-input-container">
                        <i id="addPhoto" class="bi bi-plus-square"></i>
                        <input type="file" name="gym_picture" accept="image/*">
                      </div>
                    </div>
                    <div id="column">
                    <label id="addPhotoLabel" >Add Photo for Minimap</label><br>
                      <div class="file-input-container">
                        <i id="addPhoto" class="bi bi-plus-square"></i>
                        <input type="file"  name="map_picture" accept="image/*">	
                      </div><br><br>
                    </div>
                    <button class="confirmCreateVenue">Confirm</button>
                </form>
                
          </div>
        </div>
     </div>