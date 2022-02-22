<?php 
	session_start();

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
			print_r($userArray);


			$file2 = fopen("../model/user.txt", 'w');
			for ($j=0; $j < $i; $j++) { 
				if($userArray[$j][0] != $username){
					$userData = $userData.$userArray[$j][0]."|".$userArray[$j][1]."|".$userArray[$j][2]."\n";
				}
			}
			fwrite($file2, $userData);
			fclose($file2);


			$newUser = $username."|".$password."|".$email."\n";
			$file3 = fopen("../model/user.txt", 'a');
			fwrite($file3, $newUser);
			fclose($file3);
			
			header('location: ../views/login.php');

		}else{
			echo "null submission..";
		}
	}	
?>