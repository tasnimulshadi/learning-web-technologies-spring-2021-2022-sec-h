<?php
	require_once('../controller/headerCookie.php');
	require_once('../model/userModel.php');
	$editUid =  $_GET['editUid'];
	list($usertype,$username,$password,$email)=getUserById($editUid);
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
				<div id="editusers">
					<h2>Edit User</h2>
					<div id="loginBody_form" class="editusers_form">
						<form method="POST" action="../controller/adminUserEditCheck.php?editUid=<?=$editUid?>">
							<input type="text" name="username" id="inputUsername" class="login_inputField" placeholder="Username" value="<?=$username?>">
							<input type="text" name="password" id="inputPassword" class="login_inputField" placeholder="Password" value="<?=$password?>">
							<input type="email" name="email" id="inputEmail" class="login_inputField" placeholder="email@email.com" value="<?=$email?>">
							<input type="submit" name="submit" class="login_submitBtn" value="Edit User">
						</form>
					</div>
				</div>
			</div>
		</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>
