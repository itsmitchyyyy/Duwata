<?php 
    require("dbconn.php");

    $adID = $_GET['adminID'];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Transaction</title>
        <link rel="stylesheet" href="transac.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                    <li><a href="home.php?adminID=<?php echo  $adID?>">Players</a></li>
                    <li><a href="gym.php?adminID=<?php echo $adID?>">Gym Owners</a></li>
                    <li><a href="gym2.php">Gym</a></li>
                    <li><a href="transac.php?AdminID=<?php echo $adID?>">Transaction</a></li>
                    <li><a href="sports.php">Sports</a></li>
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

        <h2>Manage Transaction</h2><br>
            <table>
                <tr>
                    <th>Transaction Number</th>
                    <th>Payment Method</th>
                    <th>Players</th>
                    <th>Gym Owner</th>
                    <th>Amount</th>
                    <th>Date</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Bank Transfer</td>
                    <td>Jezel Lahoylahoy</td>
                    <td>Jhayson A. Navaja</td>
                    <td>2,000</td>
                    <td>07/11/23</td>
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