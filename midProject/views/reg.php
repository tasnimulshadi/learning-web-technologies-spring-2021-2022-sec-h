<html>
<head>
	<title>Signup Page</title>
</head>
<body>

<!-- Menu -->
	<table border="0" width="100%" height="100px">
		<tr>
			<td align="left">
				<img src="img/logo.png" width="100px" height="100px">
			</td>
			<td align="right">
				<h3>
					<a href="login.php"> Login </a> |
					<a href="reg.php"> Registration </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr>
			<td width="30%"></td>
			<td width="40%">
				<form method="POST" action="../controller/regCheck.php">
					<fieldset>
						<legend>Admin Signup</legend>
						<table>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" value=""></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" value=""></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="email" name="email" value=""></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Submit"></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
			<td width="30%"></td>
		</tr>
	</table>

<!-- Footer -->	
	<hr>
	<table border="0" width="100%" height="50px">
		<tr>
			<td colspan="2" align="center">
				Copyright ~ Web Technology, Section: H, Group: 3
			</td>
		</tr>
	</table>




</body>
</html>