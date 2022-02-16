<?php 
	session_start();

	if (isset($_SESSION['user'])) {
		$userData = $_SESSION['user'];
		$username= $userData['username'];
		$name= $userData['name'];
		$email= $userData['email'];
		$gender= $userData['gender'];
		$dob= $userData['dob'];

		
		if (isset($_REQUEST['submit'])) {
			$newPassword= $_REQUEST['newPassword'];
			$confirmNewPassword= $_REQUEST['confirmNewPassword'];

			if ($newPassword!=null && $confirmNewPassword!=null) {
				if ($newPassword == $confirmNewPassword) {
					$user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$newPassword, 'gender'=>$gender, 'dob'=>$dob];

					$_SESSION['user']=$user;
					echo "Pass changed";
				}
				else{
					echo "Pass not matched";
				}			
			}
			else{
				echo "empty pass fields";
			}
		}
	}

?>