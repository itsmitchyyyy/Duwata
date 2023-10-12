<?php

require('dbconn.php');

$ID = $_GET['userid'];
$fetch = "SELECT * FROM users WHERE userid={$ID}";
$result = mysqli_query($conn, $fetch);
$row = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<head>
    <title>Transaction</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="images/duwata.png">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
  <div class="container-fluid">
    <div class="edit-transac row">
      <div class="col" >
        <table>
          <center>
            <div class="arrow2">
              <a href="home.php?userid=<?php echo $ID;?>"><i class="bi bi-arrow-left-short"></i></a>
            </div>
          <p class="one">Transaction</p><br>
          </center>
          <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Name</th>
              <th>Payment Method</th>
              <th>Amount</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>04/03/23</td>
              <td>10:00AM - 12:00PM</td>
              <td>John Miecho C. Arnad</td>
              <td>Gcash</td>
              <td>5,000</td>
              <td>Paid</td>
            </tr>
      </table>
      </div>
    </div>
 </div>
</body>
</html>