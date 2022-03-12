<?php 
	require_once('../controller/headerCookie.php');

	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['date'];
		$title = $_REQUEST['title'];
		$details = $_REQUEST['details'];

		if($date != null && $title != null && $details != null){
			$file = fopen("../model/notice.txt", 'r');
			while(!feof($file)){
				$dataLine = fgets($file);
				if ($dataLine==null) {
					$fileEmpty=true;
				}
				else{
					$fileEmpty=false;
					$noticeArray = explode('|', $dataLine);
				}
			}
			fclose($file);

			$file = fopen("../model/notice.txt", 'a');
			$notice = trim($date)."|".$title."|".$details;

			if ($fileEmpty) {
				fwrite($file, $notice);
			}
			else{
				fwrite($file, "\n".$notice);
			}
			fclose($file);
			header('location: ../views/adminNotice.php');
		}
		else{
			echo "null submission..";
		}
	}	



?>