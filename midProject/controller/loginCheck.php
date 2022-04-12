<?php 
	require('../model/userModel.php');

	$usertype=$_GET['utype'];
	$username=$_GET['uname'];
	$password=$_GET['upass'];



if($username != "" && $password != ""){
	$status = login($usertype, $username, $password);
		if($status){
			$_SESSION['status'] = 'true';
			setcookie('status', 'true', time()+3600, '/');
			$_SESSION['usertype'] = $usertype;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			
			header('location: ../views/adminHome.php');
		}else{
			echo "error";
		}
}
else{
	echo "null";
}



?>







<?php 


/*
	if(isset($_REQUEST['submit'])){
		$usertype = $_REQUEST['usertype'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		
			$status = login($usertype, $username, $password);
			if($status){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');

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
*/




?>