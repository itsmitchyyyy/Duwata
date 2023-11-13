<html>
<head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 
        <style>
            *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }
  
  body{
    font-family: montserrat;
  }
  
  nav{
    background: #185A56;
    height: 80px;
    width: 100%;
  }

  .user-logo{
    width: 100px;
    border-radius: 60%;
    cursor: pointer;
    margin-left: 100px;
    top: -11px;
    position: absolute;
  }

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    margin: 20px;
    width: 95%;
    
  }
  
  td, th {
    border: 1px solid ;
    text-align: left;
    padding: 8px;
    text-align: center;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }

  .sub-menu-wrap{
    position: absolute;
    top: 8%;
    left: 78%;
    width: 280px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
  }
  
  .sub-menu-wrap.open-menu{
    max-height: 400px;
  }
  
  .sub-menu{
    background: whitesmoke;
    padding: 20px;
    margin: 20px;
    width: 110%;
  }
  
  .sub-menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ccc;
    margin: 15px 0 10px;
  }

  .user-in{
    display: flex;
    align-items: center;
  }
  
  .user-in h2{
    font-weight: 500;
    font-size: small;
    text-align: center;
    right: 10px;
  }
  
  .user-in img{
    width: 20px;
    border-radius: 50%;
    margin-left: 15px;
  }
  
  .sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #525252;
    margin: 12px 0;
  }
  
  .sub-menu-link p{
    width: 100%;
    font-size: small;
  }
  
  .sub-menu-link span{
    font-size: 22px;
    transform: transform 0.5s;
  }
  
  .sub-menu-link:hover span{
    transform: translateX(5px);
  }
  
  .sub-menu-link:hover p{
    font-weight: 600;
  }

  .m1{
    height: 20px;
  }

  .user-pic{
    width: 40px;
    border-radius: 60%;
    cursor: pointer;
    margin-left: 1250px;
    top: 20px;
    position: absolute;
  }

  .container{
    height: 100%;
    width: 250px;
    position: absolute;
    background: #185A56;
    z-index: 1;
    transition: 0.5s ease;
    transform: translateX(-250px);
  }
  ol{
    width: 100%;
    list-style: none;
  }

  ol li{
    display: block;
    width: 100%;
  }

  ol li a{
    color: #fbfdce;
    padding: 15px 10px;
    text-decoration: none;
    display: block;
    font-size: 20px;
    letter-spacing: 1px;
    position: relative;
    transform: 0.3s;
    overflow: hidden;
    text-transform: capitalize;
  }

  ol li a i{
    width: 70px;
    font-size: 25px;
    text-align: center;
    padding-left: 30px;
  }

  input{
    visibility: none;
    display: none;
  }

  span{
    position: absolute;
    right: -50px;
    top: 25px;
    font-size: 20px;
    border-radius: 3px;
    color: #fff;
    padding: 3px 8px;
    cursor: pointer;
    background: #000;
  }

  #bars{
    background: #185A56;
  }

  #check:checked ~ .container{
    transform: translate(0);
  }
  
  .plus{
    float: right;
    padding-right: 60px;
    font-size: 30px;
    padding-bottom: 20px;
  }
  
        </style>
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
                    <li><a href="home.php">Players</a></li>
                    <li><a href="gym.php">Gym Owners</a></li>
                    <li><a href="gym2.php?">Gym</a></li>
                    <li><a href="transac.php">Transaction</a></li>
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
        <h2 style="padding-left:80px;">Sport</h2><br>
        <div class="plus">
        <a style="color:black;" href="addsports.php"><i class="bi bi-plus-square-fill"></i></a>
        </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Sports Name</th>
                    <th>Disable Sport</th>
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