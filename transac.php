<?php

require('dbconn.php');

$ID = $_GET['userid'];
$fetch = "SELECT * FROM users WHERE userid={$ID}";
$result = mysqli_query($conn, $fetch);
$row = mysqli_num_rows($result);


$gymSql = "SELECT gym_id FROM gym WHERE userid = ".$ID;
$gymResult = mysqli_query($conn, $gymSql);
$gymRow = mysqli_fetch_assoc($gymResult);

if (isset($gymRow)) {
  $scheduleSql = "SELECT id FROM schedule WHERE gym_id = ".$gymRow['gym_id']." ORDER BY id DESC";
	$scheduleResult = mysqli_query($conn, $scheduleSql);
	$scheduleRow = $scheduleResult->fetch_all(MYSQLI_ASSOC);
}

$scheduleIds = array_column($scheduleRow, 'id');

if (count($scheduleIds) > 0) {
  $scheduleTimeSql = "SELECT id FROM schedule_time WHERE schedule_id IN (".implode(",", $scheduleIds).")";
  $scheduleTimeResult = mysqli_query($conn, $scheduleTimeSql);
  $scheduleTimeRow = $scheduleTimeResult->fetch_all(MYSQLI_ASSOC);
}

$scheduleTimeIds = array_column($scheduleTimeRow, 'id');

$transactionRow = [];
if (count($scheduleTimeIds) > 0) {
  $transactionSql = "SELECT t.id as transactionId, t.status as tStatus, t.createdAt as tCreatedAt, t.*, bs.*, p.*, st.* FROM transactions t 
    JOIN booking_schedule bs ON bs.id = t.booking_schedule_id 
    JOIN players p ON p.playerID = bs.playerID
    JOIN schedule_time st ON st.id = bs.schedule_time_id
    WHERE bs.schedule_time_id IN (".implode(",", $scheduleTimeIds).")";
  $transactionResult = mysqli_query($conn, $transactionSql);
  $transactionRow = $transactionResult->fetch_all(MYSQLI_ASSOC);
}


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
           <?php foreach($transactionRow as $row) { ?>
              <tr>
                <td><?php echo date('m/d/Y', strtotime($row['tCreatedAt'])) ?></td>
                <td><?php echo date('h:i A',strtotime($row['time_start']))  ?> - <?php echo date('h:i A',strtotime($row['time_end'])) ?></td>
                <td><?php echo ucfirst($row['player_firstname']).' '.ucfirst($row['player_middlename']).' '.ucfirst($row['player_lastname']) ?></td>
                <td><?php echo ucfirst($row['payment_mode']) ?></td>
                <td><?php echo $row['amount'] ?></td>
                <td><?php echo ucfirst($row['tStatus']) ?></td>
              </tr>
          <?php } ?>
      </table>
      </div>
    </div>
 </div>
</body>
</html>