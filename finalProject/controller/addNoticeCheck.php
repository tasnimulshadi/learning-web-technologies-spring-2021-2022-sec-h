<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	$json = $_GET['myjson'];
	$addNoticeInfo = json_decode($json);
	$date = $addNoticeInfo->date;
	$title = $addNoticeInfo->title;
	$detail = $addNoticeInfo->detail;

	if($date != null && $title != null && $detail != null){
			
		$status = addNotice($date, $title, $detail);

		if($status){
			echo "New Notice Added...";
		}else{
			echo "Error Occurred...";
		}

	}
	else{
		echo "Null Submission..";
	}	



?>