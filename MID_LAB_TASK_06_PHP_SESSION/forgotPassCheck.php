<?php 	

	session_start();

	if (isset($_REQUEST['submit'])) {
		$email=$_REQUEST['email'];

		if ($email != null) {
			if (isset($_SESSION['user'])) {
				$user=$_SESSION['user'];
			}

			if ($user['email'] == $email) {
				echo "Your Password Is: " . $user['password'];
			}
			else{
				echo "email not registered";
			}
		}
		else{
			header('location: forgotPass.php');
		}



	}



?>