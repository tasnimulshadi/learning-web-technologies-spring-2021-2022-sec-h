<?php 
	require_once('../controller/headerCookie.php');
	echo file_get_contents("html/homepages.html"); 
?>
<h1>Welcome back, <span><?=$_SESSION['uname']?></span></h1>
<a href="../controller/logout.php">Logout</a>
</body>
</html>