<!DOCTYPE html>
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https//unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
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
            <div class="center">
                <h1>Register</h1>
                <h3>Enter your personal informations</h3>
                <form method="POST" action="registerback.php" enctype="multipart/form-data">
                  <div class="txt_field">
                    <input type="text" placeholder="Firstname" name="player_firstname" required>
                  </div><br>
                  <div class="txt_field">
                    <input type="text" placeholder="Mastname" name="player_middlename" required>
                  </div><br>
                  <div class="txt_field">
                    <input type="text" placeholder="Lastname" name="player_lastname" required>
                  </div><br>
                  <div class="txt_field">
                      <input type="text" placeholder="Email" name="player_email" required>
                    </div><br>
                    <div class="txt_field">
                      <select id="user_gender" name="player_gender">
                        <option value="MALE">Male</option?>
                        <option value="FEMALE">Female</option>
                      </select>
                    </div><br>
                    <div class="txt_field">
                      <input type="text" placeholder="Phone Number" name="player_phonenumber" required>
                    </div><br>
                    <div class="txt_field">
                      <input type="date" placeholder="" name="player_birthdate"required>
                    </div><br>
                    <div class="txt_field">
                      <input type="text" placeholder="Address" name="player_address" required>
                    </div><br>
                    <div class="txt_field">
                      <input type="text" placeholder="Password" name="player_password" required>
                    </div><br>
                    <div id="column">
                      <label>Valid ID</label><br>
                        <div class="file-input-container">
                          <i  class="bi bi-plus-square"></i>
                          <input type="file" name="player_picture"><br><br>
                        </div>
                    </div>
                    
                  <input type="submit" value="Register">
                </form>
              </div>
          </div>
        </div>
     </div>
</body>
</html>