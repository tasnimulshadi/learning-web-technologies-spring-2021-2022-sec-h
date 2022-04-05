<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	$deleteUid =  $_GET['deleteUid'];

	if (deleteUserById($deleteUid)) {
	  header('location: ../views/adminUsers.php?delmsg=success');
	} else {
	  header('location: ../views/adminUsers.php?delmsg=error');
	}
	
	


	
?>