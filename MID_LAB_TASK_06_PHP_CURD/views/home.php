<?php 
	require_once('../controller/headerCookie.php');

	$uname =  $_GET['uname'];
	$file = fopen('../model/user.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[0]) == $uname){
			$userData = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	

	<a href="../controller/logout.php"> Logout </a>
	<br>

	<h1>Welcome home!</h1> 

	<fieldset>
		<legend>Profile</legend>
		<table border="1">
			<tr>
				<td align="center">Usernanme</td>
				<td align="center">Password</td>
				<td align="center">Email Address</td>
			</tr>
			<tr>
				<td align="center"><?=$userData[0]?></td>
				<td align="center"><?=$userData[1]?></td>
				<td align="center"><?=$userData[2]?></td>
			</tr>
		</table>
		<a href="edit.php?uname=<?=$userData[0]?>">Edit</a> |
		<a href="delete.php?uname=<?=$userData[0]?>">Delete</a>
	</fieldset>

	
	
</body>
</html>
