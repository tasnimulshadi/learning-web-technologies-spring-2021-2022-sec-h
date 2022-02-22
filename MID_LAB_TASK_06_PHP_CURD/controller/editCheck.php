<?php 
	session_start();

	$uname =  $_GET['uname'];

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
			
			$file1 = fopen('../model/user.txt', 'r');
			$i=0;
			while(!feof($file1)){
				$user = fgets($file1);
				$userArray[$i] = explode('|', $user);
				$i++;
			}
			fclose($file1);

			$file2 = fopen("../model/user.txt", 'w');
			for ($j=0; $j < $i; $j++) { 
				if($userArray[$j][0] != $uname){
					$userData = $userData.$userArray[$j][0]."|".$userArray[$j][1]."|".$userArray[$j][2]."\n";
				}
			}
			$userData = $userData.$username."|".$password."|".$email."\n";
			fwrite($file2, $userData);
			fclose($file2);
			
			header('location: ../views/login.php');

		}else{
			echo "null submission..";
		}
	}	
?>