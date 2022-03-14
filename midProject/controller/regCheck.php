<?php 
	require_once('../controller/headerCookie.php');

	$file = fopen('../model/userAdmin.txt', 'r');
	while(!feof($file)){
		$userFile = fgets($file);
		if ($userFile!=null) {
			$fileEmpty=false;
			$userArray = explode('|', $userFile);
		}
		else{
			$fileEmpty=true;
		}
	}


	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){

			if (!$fileEmpty) {
				if(trim($userArray[1]) != $username){
					$user = "\n"."admin"."|".$username."|".$password."|".$email;
					$file = fopen("../model/userAdmin.txt", 'a');
					fwrite($file, $user);
					fclose($file);
					
					header('location: ../views/login.php');
				}
				else{
					echo "username already exists";
				}
			}
			else{
				$user = "admin"."|".$username."|".$password."|".$email;
				$file = fopen("../model/userAdmin.txt", 'w');
				fwrite($file, $user);
				fclose($file);

				header('location: ../views/login.php');
			}
			
		}else{
			echo "null submission..";
		}
	}	
?>