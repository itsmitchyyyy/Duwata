<?php 
    require("dbconn.php");

    $adID = $_GET['adminID'];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gym Owners</title>
        <link rel="stylesheet" href="gym.css">
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
                    <li><a href="home.php?adminID=<?php echo $adID?>">Players</a></li>
                    <li><a href="gym.php?adminID=<?php echo $adID?>">Gym Owners</a></li>
                    <li><a href="gym2.php2">Gym</a></li>
                    <li><a href="transac.php?adminID=<?php echo $adID?>">Transaction</a></li>
                    <li><a href="gym.php">Players</a></li>
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

        <h2>Manage Gym Owner</h2><br>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Disable Account</th>
                  </tr>
                  <?php 
                  
                    $fetch="SELECT * FROM users";
                    $result = mysqli_query($conn, $fetch);
                    $row = mysqli_num_rows($result);

                    if($row){
                        while($row = mysqli_fetch_assoc($result)) {
                    
                    
                  ?>
                  <tr>
                    <td><?php echo $row['userid']?></td>
                    <td><?php echo $row['user_firstname'].' '.$row['user_middlename'].' ',$row['user_lastname']?></td>
                    <td><?php echo $row['user_email']?></td>
                    <td><?php echo $row['user_phonenumber']?></td>
                    <td><?php echo $row['user_address']?></td>
                    <td>
                    
                        <form method="POST" action="deletegymowner.php?userid=<?php echo $row['userid']?>"><button>Disable</button></form>
                    </td>
                  </tr>
                  <?php }} ?>
            </table>

            <script>
                let subMenu = document.getElementById('subMenu');
    
                function toggleMenu() {
                    subMenu.classList.toggle("open-menu");
                }
            </script>
    
    </body>
</html>