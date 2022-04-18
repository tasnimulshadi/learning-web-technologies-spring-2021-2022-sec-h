<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Notice</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenu.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenu.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content----------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="content">
			<div id="users">
				<h2>Users</h2>
				<div id="users_table">
					<table>
						<tr>
							<th class="users_table_c1">User Type</th>
							<th class="users_table_c2">User Nanme</th>
							<th class="users_table_c3">Password</th>
							<th class="users_table_c4">Email Address</th>
							<th class="users_table_c5">Action</th>
						</tr>
	<!--Show from DB--------------------------------------------------------------->
						<?php 
							require('../model/userModel.php');
							$result = getAllUser();

							if (mysqli_num_rows($result) > 0) {
							  while($row = mysqli_fetch_assoc($result)) {						  
						?>
						<tr>
							<td class="users_table_c1"><?php echo $row["usertype"];?></td>
							<td class="users_table_c2"><?php echo $row["username"];?></td>
							<td class="users_table_c3"><?php echo $row["password"];?></td>
							<td class="users_table_c4"><?php echo $row["email"];?></td>
							<td  class="users_table_c5">
								<a class="users_table_c51_a" href="adminUserEdit.php?editUid=<?=$row["id"]?>">Edit</a>
								<a class="users_table_c52_a" href="../controller/adminUserDelete.php?deleteUid=<?=$row["id"]?>">Delete</a>
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
					<?php 
						if(isset($_GET['delmsg'])) 
					    { 
							$delmsg = $_GET['delmsg'];
					        if ($delmsg=="success") {
							?>
							<p class="users_msg" style="color:green;">User Successfully Deleted</p>
							<?php
							}
							else {
							?>
							<p class="users_msg" style="color:red;">User Not Deleted</p>
							<?php
							}
					    } 
					    
					    if(isset($_GET['editmsg'])) 
					    { 
							$editmsg = $_GET['editmsg'];
					        if ($editmsg=="success") {
							?>
							<p class="users_msg" style="color:green;">User Successfully Edited</p>
							<?php
							}
							else {
							?>
							<p class="users_msg" style="color:red;">User Not Edited</p>
							<?php
							}
					    }					  
					?>
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>

