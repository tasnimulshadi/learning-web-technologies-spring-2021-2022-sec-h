<?php 
	require_once('../controller/headerCookie.php');

	$ut =  $_GET['ut'];
	$un =  $_GET['un'];


	


	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){
//--------------------Reading--------------------
			if ($ut=="teacher") {
				$file = fopen('../model/userTeacher.txt', 'r');
			}
			elseif ($ut=="student") {
				$file = fopen('../model/userStudent.txt', 'r');
			}
			else{
				$file = fopen('../model/userParent.txt', 'r');
			}

			$j=0;
			while(!feof($file)){
				$dataLine = fgets($file);
				$array = explode('|', $dataLine);
				if ( trim($array[1]) != $un ) {
					$userArray[$j] = $array;
					$j++;
				}
			}
			fclose($file);

//--------------------Writting--------------------
			if ($ut=="teacher") {
				$file = fopen('../model/userTeacher.txt', 'w');
			}
			elseif ($ut=="student") {
				$file = fopen('../model/userStudent.txt', 'w');
			}
			else{
				$file = fopen('../model/userParent.txt', 'w');
			}

			$user = null;
			if ($userArray!=null) {
				for ($i=0; $i < sizeof($userArray); $i++) { 
					if ($user!=null) {
						$user = $user."\n".trim($userArray[$i][0])."|".trim($userArray[$i][1])."|".trim($userArray[$i][2])."|".trim($userArray[$i][3]);
					}
					else{
						$user = trim($userArray[$i][0])."|".trim($userArray[$i][1])."|".trim($userArray[$i][2])."|".trim($userArray[$i][3]);
					}
				}

				$user = $user."\n".trim($ut)."|".trim($username)."|".trim($password)."|".trim($email);
			}
			else{
				$user = trim($ut)."|".trim($username)."|".trim($password)."|".trim($email);
			}

			fwrite($file, $user);
			fclose($file);
			header('location: ../views/adminUsers.php');
		}else{
			echo "null submission..";
		}
	}	

?>