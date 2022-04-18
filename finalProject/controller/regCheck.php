<?php 
	session_start();
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			
			$status = signup("admin", $username, $password, $email);

			
			if($status){
				header('location: ../views/login.php');
			}else{
				header('location: ../views/reg.php');
			}

		}else{
			echo "null submission..";
		}
	}	
?>