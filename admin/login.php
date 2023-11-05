<?php

if(isset($_GET['authentication'])) {
  $authStatus = $_GET['authentication'];
} else {
  $authStatus = '';
}

?>
<html lang="en" dir="ltr">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="center">
          <h1>Login</h1>
          <form method="POST" action="authentication.php">
            <div class="txt_field">
              <input type="text" placeholder="Username" name="admin_user" required>
            </div><br>
            <div class="txt_field">
              <input type="password" placeholder="Password" name="admin_pass" required>
            </div><br>
            <div class="me">
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </div>
                <div class="pass">Forgot Password?</div><br><br>
            <input type="submit" value="Login">
          </form>
        </div>
    
      </body>
</html>