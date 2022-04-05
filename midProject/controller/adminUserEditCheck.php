<?php 
	require_once('../controller/headerCookie.php');
	require_once('../model/userModel.php');
	$editUid =  $_GET['editUid'];

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){

			if (updateUser($editUid,$username,$password,$email)) {
			  header('location: ../views/adminUsers.php?editmsg=success');
			} 
			else {
			  header('location: ../views/adminUsers.php?editmsg=error');
			}

		}else{
			echo "null submission..";
		}
	}	

?>