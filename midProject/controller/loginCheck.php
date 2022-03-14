<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		$usertype = $_REQUEST['usertype'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		$fileName;
		if ($usertype=="admin") {
			$fileName='../model/userAdmin.txt';
		}
		elseif ($usertype=="teacher") {
			$fileName='../model/userTeacher.txt';
		}
		elseif ($usertype=="student") {
			$fileName='../model/userStudent.txt';
		}
		else{
			$fileName='../model/userParent.txt';
		}

		if($username != null && $password != null & filesize($fileName)!=0 ){

			$invalid=false;
			$file = fopen($fileName, 'r');
			while(!feof($file)){
				$user = fgets($file);
				$userArray = explode('|', $user);

				if(trim($userArray[1]) == $username && trim($userArray[2]) == $password){
					//$_SESSION['status'] = 'true';
					setcookie('status', 'true', time()+3600, '/');
					$_SESSION['utype'] = trim($userArray[0]);
					$_SESSION['uname'] = trim($userArray[1]);

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