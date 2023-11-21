<?php

require('dbconn.php');

$ID = $_GET['userid'];
$fetch = "SELECT * FROM users WHERE userid={$ID}";
$result = mysqli_query($conn, $fetch);
$row = mysqli_num_rows($result);

$notificationSql = "SELECT * FROM notifications";
$notificationResult = mysqli_query($conn, $notificationSql);
$notificationRow = $notificationResult->fetch_all(MYSQLI_ASSOC);

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="messageContacts.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="notification.css">
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
            $(function () {
            
            var pusher = new Pusher('e46647b2f0c1a7819b8f', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('booking-channel');
            channel.bind('booking-event', function(data) {
                $('#bodyNotification').prepend(`
                    <div class="post">
                        <div class="circle"></div>
                        <span class="time">` + data['createdAt'] + `</span>
                        <p>` + data['message'] + `</p>
                    </div>
                `);
            });
            })
      </script>
    </head>
    <body><br>
        <div class="container-fluid d-flex justify-content-center align-items-center">
			<div class="edit-profile row">
                <div class="outer-notification menu-no-animation"></div>
                <div class="head-notification">
                    <div class="back">
                        <a href="home.php?userid=<?php echo $ID; ?>"><i class="bi bi-arrow-left"></i></a>
                    </div>    
                    <h5>Notification</h5>
                </div>
                <div class="body-notification" id="bodyNotification">
                    <?php foreach ($notificationRow as $row) { ?>
                        <div class="post">
                            <div class="circle"></div>
                            <span class="time"><?php echo date('g:i A', strtotime($row['createdAt'])) ?></span>
                            <p><?php echo $row['message'] ?></p>
                        </div>
                    <?php } ?>
                   
                </div>
                </div>
            </div>
        </div>
    </body>
</html>