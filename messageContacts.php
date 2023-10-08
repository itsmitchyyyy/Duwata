<?php
?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="messageContacts.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	</head>
	<style>
	a{
		text-decoration:none;
		color:black;
	}
	</style>
	<body>
		<div class="container-fluid d-flex justify-content-center align-items-center">
			<div class="edit-profile row">
				<div class="col">
					<br style="line-height:2">
					<a href="home.php"><i class="bi bi-arrow-left"></i></a>
					<br><br style="line-height:1">
					<form id="searchForm">
						<input type="text" class="searchBar">
						<i id="searchIcon" class="bi bi-search"></i>
					</form>
					<br><br>
					<ul id="contactList">
						<a href="messageBox.php">
						  <li class="contactItem">
							  <div class="profileImg"></div>
							  <div class="profileName">Johnmiecho Arnad</div>
						  </li>
						</a>
					  <a href="messageBox.php">
						  <li class="contactItem">
							  <div class="profileImg"></div>
							  <div class="profileName">Jhayson Navaja</div>
						  </li>
					  </a>
					  <a href="messageBox.php">
						<li class="contactItem">
						  <div class="profileImg"></div>
						  <div class="profileName">Jacob Lagmay</div>
						</li>
					  </a>
					  <a href="messageBox.php">
						<li class="contactItem">
						  <div class="profileImg"></div>
						  <div class="profileName">Jheferson</div>
						</li>
					  </a>
					  <a href="messageBox.php">
						<li class="contactItem">
						  <div class="profileImg"></div>
						  <div class="profileName">Jezel Lahoylahoy</div>
						</li>
					  </a>
					</ul>
				</div>
			</div>
		</div>
	</body>
	</head>
</html>