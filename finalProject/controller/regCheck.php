<?php 
	session_start();
	require('../model/userModel.php');

	$json = $_GET['myjson'];
	$regInfo = json_decode($json);
	$email = $regInfo->email;
	$username = $regInfo->username;
	$password = $regInfo->password;

	if($username != null && $password != null && $email != null){
			
		$status = signup("admin", $username, $password, $email);
		
		if($status){
			echo "New Admin Account Created";
			//header('location: ../views/login.php');
		}else{
			echo "Error Occurred...";
			//header('location: ../views/reg.php');
		}

	}else{
		echo "Null Submission...";
	}	

?>