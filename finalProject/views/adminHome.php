<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenu.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenu.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content-------------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="content">
			<div id="welcome">
				<h1>Welcome back, <span><?=$_SESSION['uname']?></span></h1>
			</div>
			<div id="dashboard">
				<a href="adminHome.php" class="dashboard_menuBox1">
					<img src="img/icons8-home-100.png">
				</a>
				<a href="adminNotice.php" class="dashboard_menuBox2">
					<img src="img/icons8-notice-100.png">
				</a>
				<a href="adminAddNotice.php" class="dashboard_menuBox3">
					<img src="img/icons8-add-100.png">
				</a>
				<a href="adminUsers.php" class="dashboard_menuBox4">
					<img src="img/icons8-users-100.png">
				</a>
				<a href="adminAddUser.php" class="dashboard_menuBox5">
					<img src="img/icons8-add-user-group-man-man-100.png">
				</a>
				<a href="adminProfile.php" class="dashboard_menuBox6">
					<img src="img/icons8-male-user-100.png">
				</a>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>



