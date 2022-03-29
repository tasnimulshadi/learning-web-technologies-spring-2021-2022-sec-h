<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	$uid =  $_GET['uid'];

	if (deleteUserById($uid)) {
	  header('location: ../views/adminUsers.php?delmsg=success');
	} else {
	  header('location: ../views/adminUsers.php?delmsg=error');
	}
	
	


	
?>