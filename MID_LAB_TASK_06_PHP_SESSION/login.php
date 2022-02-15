<html>
<head>
	<title>Login</title>
</head>
<body>

		<table border="0" width="100%">
			<tr height="80px">
				<td width="80px">
					<img src="logo.png" width="80px" height="80px">
				</td>
				<td colspan="2" align="right">
					<a href="home.php"> Home </a> |
					<a href="login.php"> Login </a> |
					<a href="reg.php"> Registration </a>
					<hr>
				</td>

			</tr>
			<tr height="400px">
				<td></td>
				<td>
					<form method="POST" action="regCheck.php">
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
				</td>
			</tr>
			<tr height="50px">
				<td colspan="3" align="center"> 
					<hr>
					copyright@2022
					<hr>
				</td>
			</tr>
		</table>
</body>
</html>