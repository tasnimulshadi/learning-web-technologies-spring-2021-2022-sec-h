<?php 
	require_once('../controller/headerCookie.php');

	if(isset($_REQUEST['submit'])){
		$usertype = $_REQUEST['usertype'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($usertype != null && $username != null && $password != null && $email != null){
			$fileRead;
			$fileWrite;
			$user = $usertype."|".$username."|".$password."|".$email;
			if ($usertype=="teacher") {
				$fileRead = fopen("../model/userTeacher.txt", 'r');
				$fileWrite = fopen("../model/userTeacher.txt", 'a');
			}
			elseif ($usertype=="student") {
				$fileRead = fopen("../model/userStudent.txt", 'r');
				$fileWrite = fopen("../model/userStudent.txt", 'a');
			}
			else{
				$fileRead = fopen("../model/userParent.txt", 'r');
				$fileWrite = fopen("../model/userParent.txt", 'a');
			}

			while(!feof($fileRead)){
				$dataLine = fgets($fileRead);
				if ($dataLine==null) {
					$fileEmpty=true;
				}
				else{
					$fileEmpty=false;
					$userArray = explode('|', $dataLine);
				}
			}
			fclose($fileRead);

			if ($fileEmpty) {
				fwrite($fileWrite, $user);
				fclose($fileWrite);
				header('location: ../views/adminUsers.php');
			}
			else{
				if(trim($userArray[1]) != $username){
					fwrite($fileWrite, "\n".$user);
					fclose($fileWrite);
					header('location: ../views/adminUsers.php');
				}
				else{
					echo "username already exists";
				}
			}
		}
		else{
			echo "null submission..";
		}
	}	
?>