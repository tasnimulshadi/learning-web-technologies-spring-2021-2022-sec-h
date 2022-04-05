<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>

<html>
<head>
	<title>Home Page</title>
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
					<tr>
						<td align="center" width="100px"><b>Date</b></td>
						<td align="center" width="200px"><b>Title</b></td>
						<td align="center"><b>Details</b></td>
						<td align="center" width="100px"><b>Action</b></td>
					</tr>
<!--Show Notice--------------------------------------------------------------->
					<?php 
						require('../model/userModel.php');
						$result = getAllNotice();

						if (mysqli_num_rows($result) > 0) {
						  while($row = mysqli_fetch_assoc($result)) {						  
					?>
					<tr>
						<td align="center" width="100px"><?php echo $row["date"];?></td>
						<td align="center" width="200px"><?php echo $row["title"];?></td>
						<td align="center"><?php echo $row["detail"];?></td>
						<td align="center" width="100px"><a href="../controller/adminNoticeDelete.php?noticeid=<?=$row["id"]?>">Delete</a></td>
					</tr>
					<?php	
							}
						} 
						else {
						  echo "0 results";
						}
					?>
				</table>
				<?php 
					if(isset($_GET['delmsg'])) 
				    { 
						$delmsg = $_GET['delmsg'];
				        if ($delmsg=="success") {
						?>
						<p style="color:green;">Notice Successfully Deleted</p>
						<?php
						}
						else {
						?>
						<p style="color:red;">Notice Not Deleted</p>
						<?php
						}
				    }
				?> 
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
