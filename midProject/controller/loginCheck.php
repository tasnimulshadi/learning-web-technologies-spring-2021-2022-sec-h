<?php 
	require_once('../controller/headerCookie.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null & filesize('../model/user.txt')!=0 ){
		
			/*if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}*/

			$invalid=false;
			$file = fopen('../model/user.txt', 'r');
			while(!feof($file)){
				$user = fgets($file);
				$userArray = explode('|', $user);

				if(trim($userArray[1]) == $username && trim($userArray[2]) == $password){
					//$_SESSION['status'] = 'true';
					setcookie('status', 'true', time()+3600, '/');
					$_SESSION['uname'] = trim($userArray[1]);

					header('location: ../views/adminHome.php');
					
				}else{
					$invalid=true;
				}
			}
			if ($invalid) {
				echo "invalid username/password";
			}
		}else{
			echo "null submission..";
		}
	}	
?>