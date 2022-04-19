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
				<div id="addusers">
					<h2>Add User</h2>
					<div id="loginBody_form" class="addusers_form">
						<form>
							<div class="login_radio">
								<input type="radio" class="login_inputRadio" name="usertype" value="teacher" required>Teacher 
								<input type="radio" class="login_inputRadio" name="usertype" value="student">Student 
								<input type="radio" class="login_inputRadio" name="usertype" value="parent">Parent
							</div>
							<input type="text" name="username" id="inputUsername" class="login_inputField" placeholder="Username" value="">

							<input type="password" name="password" id="inputPassword" class="login_inputField" placeholder="Password" value="">

							<input type="email" name="email" id="inputEmail" class="login_inputField" placeholder="email@email.com" value="">

							<input type="submit" name="submit" onclick="ajaxAddUser()" class="login_submitBtn" value="Add User">
						</form>
					</div>
				</div>
			</div>
		</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>

	<script src="script.js"></script>
</body>
</html>
