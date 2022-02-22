<html>
<head>
	<title>Signup Page</title>
</head>
<body>

	<a href="login.php"> Login </a> |
	<a href="reg.php"> Registration </a>
	<br>
	<br>

	<form method="POST" action="../controller/regCheck.php">
		<fieldset>
			<legend>Signup</legend>
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
</body>
</html>