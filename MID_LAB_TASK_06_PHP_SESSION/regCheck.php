<?php 
	session_start();
	
	if (isset($_REQUEST['submit'])) {
		$name= $_REQUEST['name'];
		$email= $_REQUEST['email'];
		$username= $_REQUEST['username'];
		$password= $_REQUEST['password'];
		$confirmPassword= $_REQUEST['confirmPassword'];
		$gender= $_REQUEST['gender'];
		$dob= $_REQUEST['dob'];

		if ($name!=null && $email!=null && $username!=null && $password!=null && $confirmPassword!=null && $gender!=null && $dob!=null) {

			if ($password==$confirmPassword) {
				$user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob]; 

				$_SESSION['user']=$user;
				header('location: login.php');

			}
			else{
				echo "password do not match";
			}
			
		}
		else{
			echo "null submission..";
		}
	}

?>