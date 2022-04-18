<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(to bottom right, #5b86e5, #36d1dc);
		}
	</style>
</head>
<body>

	<section id="loginBody">
		<div id="loginBody_form">
			<h2>Admin Signup</h2>
			<form method="POST" action="../controller/regCheck.php">
				<input type="text" name="username" id="inputUsername" class="login_inputField" placeholder="Username" value="">
				<input type="email" name="email" id="inputEmail" class="login_inputField" placeholder="Email@email.com" value="">
				<input type="password" name="password" id="inputPassword" class="login_inputField" placeholder="Password" value="">
				<input type="submit" name="submit" class="login_submitBtn" value="Signup">
				<input type="button" name="signup" onclick="openLogin()" class="login_submitBtn" value="Login">
			</form>
		</div>
	</section>

	<script src="script.js"></script>
</body>
</html>