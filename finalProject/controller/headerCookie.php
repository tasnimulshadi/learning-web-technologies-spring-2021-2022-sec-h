<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}
?>