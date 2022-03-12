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
<!--Show Teachers--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/userTeacher.txt', 'r');
						while(!feof($file)){
							$user = fgets($file);
							if ($user!=null) {
								$userTeacherArray = explode('|', $user);
					?>
					<tr>
						<td align="center"><?=$userTeacherArray[0]?></td>
						<td align="center"><?=$userTeacherArray[1]?></td>
						<td align="center"><?=$userTeacherArray[2]?></td>
						<td align="center"><?=$userTeacherArray[3]?></td>
						<td align="center">
							<a href="adminUserEdit.php?ut=teacher&un=<?=$userTeacherArray[1]?>">Edit</a>
						</td>
						<td align="center">
							<a href="../controller/adminUserDelete.php?ut=teacher&un=<?=$userTeacherArray[1]?>">Delete</a>
						</td>
					</tr>
					<?php
							}
						}
						fclose($file);
					?>
<!--Show Students--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/userStudent.txt', 'r');
						while(!feof($file)){
							$user = fgets($file);
							if ($user!=null) {
								$userStudentArray = explode('|', $user);
					?>
					<tr>
						<td align="center"><?=$userStudentArray[0]?></td>
						<td align="center"><?=$userStudentArray[1]?></td>
						<td align="center"><?=$userStudentArray[2]?></td>
						<td align="center"><?=$userStudentArray[3]?></td>
						<td align="center">
							<a href="adminUserEdit.php?ut=student&un=<?=$userStudentArray[1]?>">Edit</a>
						</td>
						<td align="center">
							<a href="../controller/adminUserDelete.php?ut=student&un=<?=$userStudentArray[1]?>">Delete</a>
						</td>
					</tr>
					<?php
							}
						}
						fclose($file);
					?>
<!--Show Parents--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/userParent.txt', 'r');
						while(!feof($file)){
							$user = fgets($file);
							if ($user!=null) {
								$userParentArray = explode('|', $user);
					?>
					<tr>
						<td align="center"><?=$userParentArray[0]?></td>
						<td align="center"><?=$userParentArray[1]?></td>
						<td align="center"><?=$userParentArray[2]?></td>
						<td align="center"><?=$userParentArray[3]?></td>
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
						fclose($file);
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
