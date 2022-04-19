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
				<div id="addnotice">
					<h2>Add Notice</h2>
					<div id="loginBody_form" class="addnotice_form">
						<form>
							<input type="date" name="date" id="inputDate" class="login_inputField addnotice_dateField" value="">

							<input type="text" name="title" id="inputTitle" class="login_inputField" placeholder="Title" value="">

							<input type="text" name="detail" id="inputDetail" class="login_inputField" placeholder="Details" value="">

							<input type="submit" name="submit" onclick="ajaxAddNotice()" class="login_submitBtn" value="Add Notice">
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