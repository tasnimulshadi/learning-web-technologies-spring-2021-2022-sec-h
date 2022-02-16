<?php 
	session_start();
	
	if (isset($_SESSION['user'])) {
		$userData = $_SESSION['user'];
		$username= $userData['username'];
		$password= $userData['password'];

		if (isset($_REQUEST['submit'])) {
			$name= $_REQUEST['name'];
			$email= $_REQUEST['email'];
			$gender= $_REQUEST['gender'];
			$dob= $_REQUEST['dob'];

			if ($name!=null && $email!=null && $gender!=null && $dob!=null) {

				$user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob];

				$_SESSION['user']=$user;
				header('location: profile.php');
				
			}
			else{
				echo "null submission..";
			}
		}
	}

?>