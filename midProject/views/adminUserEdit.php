<?php
	require_once('../controller/headerCookie.php');

	$uname =  $_SESSION['uname'];
	$ut =  $_GET['ut'];
	$un =  $_GET['un'];

	if ($ut=="teacher") {
		$file = fopen('../model/userTeacher.txt', 'r');
	}
	elseif ($ut=="student") {
		$file = fopen('../model/userStudent.txt', 'r');
	}
	else{
		$file = fopen('../model/userParent.txt', 'r');
	}

	while(!feof($file)){
		$data = fgets($file);
		$userArray = explode('|', $data);

		if(trim($userArray[1]) == $un){
			$userData = $userArray;
			break;
		}
	}

?>

<html>
<head>
	<title>Edit User</title>
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
					<a href="adminProfile.php">Profile</a> |
					<a href="../controller/logout.php"> Logout </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr>
			<td align="center" width="20%" valign="top">
				<!-- Side menu -->
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a href="adminHome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminNotice.php">Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminAddNotice.php">Add Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminUsers.php">Users</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminAddUser.php">Add User</a>
						</td>
					</tr>
				</table>
			</td>
			<td width="10%"></td>
			<td width="40%">
				<form method="POST" action="../controller/adminUserEditCheck.php?ut=<?=$ut?>&un=<?=$un?>">
					<fieldset>
						<legend>Edit User</legend>
						<table>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" value="<?=$userArray[2]?>"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
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
