<?php 
	session_start();
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			
			//$user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
			//$_SESSION['user'] = $user;

			/*$user = $username."|".$password."|".$email;
			$file = fopen("../model/user.txt", 'w');
			fwrite($file, $user);
			fclose($file);*/
			
			$status = signup($usertype, $username, $password, $email);

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