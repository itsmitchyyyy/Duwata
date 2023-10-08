<?php
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
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
                <h1>Login</h1>
                <form>
                  <div class="txt_field">
                    <input type="text" placeholder="Username" required>
                  </div><br>
                  <div class="txt_field">
                    <input type="password" placeholder="Password" required>
                  </div><br>
                  <div class="me">
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                      </div>
                      <div class="pass">Forgot Password?</div><br><br>
                  <input type="submit" value="Login">
                  <p><a>Don't have account yet? <a href="register.php">Create account</a></a></p>
                  
                  
                </form>
          </div>
        </div>
     </div>
</body>
</html>