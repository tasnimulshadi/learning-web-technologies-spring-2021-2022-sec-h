<?php 
	session_start();

	if(isset($_SESSION['status'])){
		if (isset($_SESSION['user'])) {
			$user=$_SESSION['user'];
		}
?>


<html>
<head>
	<title>Dashboard</title>
</head>
<body>

		<table border="0" width="100%">
			<tr height="80px">
				<td width="80px">
					<img src="logo.png" width="80px" height="80px">
				</td>
				<td colspan="2" align="right">
					Logged in as 
					<a href="profile.php"> <b> <?php echo $user['name']; ?> </b> </a> |
					<a href="logout.php"> Logout </a>
				</td>

			</tr>
			<tr height="400px">
				<td width="20%">
					<table align="center" width="80%">
						<tr>
							<td>
								<h3>Account</h3>
								<hr>
							</td>
						</tr>
						<tr>
							<td >
								<ul>
									<li><a href="dashboard.php"> Dashboard </a></li>
									<li><a href="profile.php"> View Profile </a></li>
									<li><a href="editProfile.php"> Edit Profile </a></li>
									<li><a href="#"> Change Profile Pic</a></li>
									<li><a href="cngPass.php"> Change Password</a></li>
									<li><a href="logout.php"> Logout</a></li>
								</ul>
							</td>
						</tr>
					</table>
				</td>
				<td width=" 80%">
					<h1>Welcome <?php echo $user['name']; ?></h1>
				</td>
				<td width="0%"></td>
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

<?php
	}else{
		header('location: login.php');
	}
?>