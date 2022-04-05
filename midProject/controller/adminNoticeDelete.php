<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	$noticeid =  $_GET['noticeid'];

	if (deleteNoticeById($noticeid)) {
	  header('location: ../views/adminNotice.php?delmsg=success');
	} else {
	  header('location: ../views/adminNotice.php?delmsg=error');
	}

	
?>