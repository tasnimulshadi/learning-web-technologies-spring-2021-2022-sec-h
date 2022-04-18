<?php 

	session_start();
	//unset($_SESSION['uname']);
	session_unset();  
	setcookie('status', 'true', time()-10, '/');
	header('location: ../views/login.php');


?>