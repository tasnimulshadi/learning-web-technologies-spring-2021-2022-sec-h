<?php 
	session_start();
	session_unset(); 
	unset($_SESSION['uid']); 
	unset($_SESSION['utype']); 
	unset($_SESSION['uname']); 
	unset($_SESSION['upass']); 
	unset($_SESSION['uemail']); 
	setcookie('status', 'true', time()-10, '/');
	header('location: ../views/login.php');
?>