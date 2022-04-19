<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	$json = $_GET['myjson'];
	$addUserInfo = json_decode($json);
	$usertype = $addUserInfo->usertype;
	$username = $addUserInfo->username;
	$password = $addUserInfo->password;
	$email = $addUserInfo->email;

	if($usertype != null && $username != null && $password != null && $email != null){
		
		$status = signup($usertype, $username, $password, $email);
		if($status){
			echo "New ".$usertype." Added...";
		}else{
			echo "Error Occurred...";
		}
	}
	else{
		echo "Null Submission...";
	}	

?>