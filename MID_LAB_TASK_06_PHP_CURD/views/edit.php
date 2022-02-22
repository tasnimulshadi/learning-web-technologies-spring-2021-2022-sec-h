<?php 
	require_once('../controller/headerCookie.php');

	$uname =  $_GET['uname'];
	$file = fopen('../model/user.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[0]) == $uname){
			$editUser = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="home.php?uname=<?=$userArray[0]?>"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="../controller/editCheck.php?uname=<?=$editUser[0]?>">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$editUser[0]?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$editUser[1]?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$editUser[2]?>"></td>
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