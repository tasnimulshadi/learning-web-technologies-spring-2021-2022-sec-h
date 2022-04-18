<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(to bottom right, #36d1dc, #5b86e5);
		}
	</style>
</head>
<body>

	<section id="loginBody">
		<div id="loginBody_form">
			<h2>Login</h2>
			<form>
				<div class="login_radio">
					<input type="radio" class="login_inputRadio" name="usertype" value="admin" required>Admin 
					<input type="radio" class="login_inputRadio" name="usertype" value="teacher">Teacher 
					<input type="radio" class="login_inputRadio" name="usertype" value="student">Student 
					<input type="radio" class="login_inputRadio" name="usertype" value="parent">Parent
				</div>
				<input type="text" name="username" id="inputUsername" class="login_inputField" placeholder="Username" value="">
				<input type="password" name="password" id="inputPassword" class="login_inputField" placeholder="Password" value="">
				<input type="button" name="login" onclick="ajaxLogin()" class="login_submitBtn" value="Login">
				<input type="button" name="signup" onclick="openSignup()" class="login_submitBtn" value="Admin Signup">
			</form>
		</div>
	</section>

	<script src="script.js"></script>
</body>
</html>