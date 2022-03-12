<?php 

	session_start();
	unset($_SESSION['uname']);
	setcookie('status', 'true', time()-10, '/');
	header('location: ../views/login.php');

?>