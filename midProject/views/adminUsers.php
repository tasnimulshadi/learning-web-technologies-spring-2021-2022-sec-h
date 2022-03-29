<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>

<html>
<head>
	<title>Users</title>
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
		<tr valign="top">
			<td align="center" width="20%">
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
			<td width="70%">
				<table border="1" width="80%">
					<tr  height="50px">
						<td align="center"><b>User Type</b></td>
						<td align="center"><b>User Nanme</b></td>
						<td align="center"><b>Password</b></td>
						<td align="center"><b>Email Address</b></td>
						<td align="center" colspan="2"><b>Action</b></td>
					</tr>
<!--Show from DB--------------------------------------------------------------->
					<?php 
						require('../model/userModel.php');
						$sql = "SELECT id, firstname, lastname FROM MyGuests";
						$result = getAllUser();

						if (mysqli_num_rows($result) > 0) {
						  while($row = mysqli_fetch_assoc($result)) {						  
					?>
					<tr>
						<td align="center"><?php echo $row["usertype"];?></td>
						<td align="center"><?php echo $row["username"];?></td>
						<td align="center"><?php echo $row["password"];?></td>
						<td align="center"><?php echo $row["email"];?></td>
						<td align="center">
							<a href="adminUserEdit.php?ut=parent&un=<?=$userParentArray[1]?>">Edit</a>
						</td>
						<td align="center">
							<a href="../controller/adminUserDelete.php?ut=parent&un=<?=$userParentArray[1]?>">Delete</a>
						</td>
					</tr>
					<?php	
							}
						} 
						else {
						  echo "0 results";
						}
					?>
				</table>
			</td>
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
