<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		
			/*if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}*/

			$file = fopen('../model/user.txt', 'r');
			while(!feof($file)){
				$user = fgets($file);
				$userArray = explode('|', $user);

				if(trim($userArray[0]) == $username && trim($userArray[1]) == $password){
					$_SESSION['status'] = 'true';
					setcookie('status', 'true', time()+3600, '/');
					
					header('location: ../views/home.php'.'?uname='.$username);
				}else{
					echo "invalid username/password";
				}
			}
		}else{
			echo "null submission..";
		}
	}	
?>