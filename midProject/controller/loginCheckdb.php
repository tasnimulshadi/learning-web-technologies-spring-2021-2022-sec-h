<?php 
	session_start();
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$usertype = $_REQUEST['usertype'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		
			$status = login($usertype, $username, $password);
			if($status){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				$_SESSION['utype'] = $usertype;
				$_SESSION['uname'] = $username;

				if ($usertype=="admin") {
					header('location: ../views/adminHome.php');
				}
				elseif ($usertype=="teacher") {
					header('location: ../views/teacherHome.php');
				}
				elseif ($usertype=="student") {
					header('location: ../views/studentHome.php');
				}
				else{
					header('location: ../views/parentHome.php');
				}
				
			}else{
				header('location: ../views/login.php?msg=error');
			}



		}else{
			echo "null submission..";
		}
	}	
?>