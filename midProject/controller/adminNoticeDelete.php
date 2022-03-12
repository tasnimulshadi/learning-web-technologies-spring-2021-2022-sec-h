<?php 
	require_once('../controller/headerCookie.php');
	$date =  $_GET['date'];

//--------------------Reading--------------------
	$file = fopen('../model/notice.txt', 'r');
	$j=0;
	while(!feof($file)){
		$f = fgets($file);
		$array = explode('|', $f);
		if ( trim($array[0]) != $date ) {
			$noticeArray[$j] = $array;
			$j++;
		}
	}
	fclose($file);

//--------------------Writting--------------------
	$file = fopen('../model/notice.txt', 'w');
	$notice = "";
	if ($noticeArray!=null) {
		for ($i=0; $i < sizeof($noticeArray); $i++) { 
			if ($notice!=null) {
				$notice = $notice."\n".trim($noticeArray[$i][0])."|".trim($noticeArray[$i][1])."|".trim($noticeArray[$i][2]);
			}
			else{
				$notice = trim($noticeArray[$i][0])."|".trim($noticeArray[$i][1])."|".trim($noticeArray[$i][2]);
			}
		}
	}
	fwrite($file, $notice);
	fclose($file);
	header('location: ../views/adminNotice.php');
	
?>