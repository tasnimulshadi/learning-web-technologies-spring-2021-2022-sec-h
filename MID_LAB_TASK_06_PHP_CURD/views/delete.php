<?php 
	session_start();

	$uname =  $_GET['uname'];

	$file1 = fopen('../model/user.txt', 'r');
	$i=0;
	while(!feof($file1)){
		$user = fgets($file1);
		$userArray[$i] = explode('|', $user);
		$i++;
	}
	fclose($file1);

	$file2 = fopen("../model/user.txt", 'w');
	for ($j=0; $j < $i; $j++) { 
		if($userArray[$j][0] != $uname){
			$userData = $userData.$userArray[$j][0]."|".$userArray[$j][1]."|".$userArray[$j][2]."\n";
		}
	}
	fwrite($file2, $userData);
	fclose($file2);
	
	header('location: ../views/login.php');	

	
?>