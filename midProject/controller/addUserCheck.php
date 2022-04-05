<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$usertype = $_REQUEST['usertype'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($usertype != null && $username != null && $password != null && $email != null){
			
			$status = signup($usertype, $username, $password, $email);

			if($status){
				header('location: ../views/adminUsers.php');
			}else{
				header('location: ../views/adminAddUser.php');
			}

		}
		else{
			echo "null submission..";
		}
	}	
?>