<html>
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <body>
        <nav>
            <input type="checkbox" name="" id="check">
            <div class="container">
                <label for="check">
                    <span class="fas fa-times" id="times"></span>
                    <span class="fas fa-bars" id="bars"></span>
                </label>
                <ol>
                    <li><a href="home.php">Manage players</a></li>
                    <li><a href="gym.php">Manage Gym Owners</a></li>
                    <li><a href="transac.php">Manage Transaction</a></li>
                </ol>
            </div>
            <img src="images/duwata.png" class="user-logo">
            <img src="images/miko.jpg" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-in">
                        <img src="images/miko.jpg">
                        <h2>John Miecho C. Arnad</h2>
                    </div>
                    <hr>

                    <a href="login.php" class="sub-menu-link">
                        <img src="images/out.png" class="m1">
                        <p>Logout</p>
                        <span>></span>
                    </a>
            </div>
        </nav><br>

        <h2>Manage players</h2><br>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>John Miecho C. Arnad</td>
                    <td>arnadjohnmiecho25@gmail.com</td>
                    <td>09123456789</td>
                    <td>Kalunasan</td>
                  </tr>
            </table>

            <script>
                let subMenu = document.getElementById('subMenu');
    
                function toggleMenu() {
                    subMenu.classList.toggle("open-menu");
                }
            </script>
    </body>
</html>