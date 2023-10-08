<?php
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="messageBox.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container-fluid d-flex justify-content-center align-items-center">
		<div class="edit-profile row">
			<div class="col">
				<br style="line-height:2">
				<a href="messageContacts.php"><i class="bi bi-arrow-left"></i></a>
				<br><br style="line-height:1">
				<div class="bubbleWrapper">
					<div class="inlineContainer">
					  <img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">
					  <div class="otherBubble other">
						No ninjas!
					  </div>
					</div><span class="other">08:41</span>
				  </div>
				  <div class="bubbleWrapper">
					<div class="inlineContainer own">
					  <img class="inlineIcon" src="https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png">
					  <div class="ownBubble own">
					   The first rule of being a ninja is, 'Do no harm.'
					  </div>
					</div><span class="own">08:55</span>
				  </div>
				  <div class="bubbleWrapper">
					<div class="inlineContainer">
					  <img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">
					  <div class="otherBubble other">
						Knowing when to leave requires training.
					  </div>
					</div>
				  </div><span class="other">10:13</span>
				  <div class="bubbleWrapper">
					<div class="inlineContainer own">
					  <img class="inlineIcon" src="https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png">
					  <div class="ownBubble own">
					  Stunned but impressed. 
					  </div>
					</div><span class="own">11:07</span>
				  </div>
				  <div class="bubbleWrapper">
					<div class="inlineContainer">
					  <img class="inlineIcon" src="https://cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">
					  <div class="otherBubble other">
						How about throwing stars?
					  </div>
					</div><span class="other">11:11</span>
				  </div>
				  <div class="message-input">
					<input type="text" placeholder="Type your message..." />
					<button class="send-button" type="button"><i class="fas fa-paper-plane"></i></button>
				  </div>
			</div>
		</div>
	</div>
</body>
</html>
