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
			<div id="notice">
				<h2>Notice</h2>
				<div id="notice_table">
					<table >
						<tr>
							<th class="notice_table_c1">Date</th>
							<th class="notice_table_c2">Title</th>
							<th class="notice_table_c3">Details</th>
							<th class="notice_table_c4">Action</th>
						</tr>
	<!--Show Notice--------------------------------------------------------------->
						<?php 
							require('../model/userModel.php');
							$result = getAllNotice();

							if (mysqli_num_rows($result) > 0) {
							  while($row = mysqli_fetch_assoc($result)) {						  
						?>
						<tr>
							<td class="notice_table_c1"><?php echo $row["date"];?></td>
							<td class="notice_table_c2"><?php echo $row["title"];?></td>
							<td class="notice_table_c3"><?php echo $row["detail"];?></td>
							<td class="notice_table_c4"><a class="notice_table_c4_a" href="../controller/adminNoticeDelete.php?noticeid=<?=$row["id"]?>">Delete</a></td>
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
							<p class="notice_msg" style="color:green;">Notice Successfully Deleted</p>
							<?php
							}
							else {
							?>
							<p class="notice_msg" style="color:red;">Notice Not Deleted</p>
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
