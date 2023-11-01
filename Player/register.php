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
                <form>
                  <div class="txt_field">
                    <input type="text" placeholder="Firstname" required>
                  </div><br>
                  <div class="txt_field">
                    <input type="text" placeholder="Lastname" required>
                  </div><br>
                  <div class="txt_field">
                      <input type="text" placeholder="Email" required>
                    </div><br>
                    <div class="txt_field">
                      <input type="text" placeholder="Gender" required>
                    </div><br>
                    <div class="txt_field">
                      <input type="text" placeholder="Number" required>
                    </div><br>
                    <div class="txt_field">
                      <input type="date" placeholder="" required>
                    </div><br>
                     
                    <div id="column">
                      <label id="addPhotoLabel">Valid ID</label><br>
                        <div class="file-input-container">
                          <i id="addPhoto" class="bi bi-plus-square"></i>
                          <input type="file" id="validinput"><br><br>
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