<?php 

	echo "<h2>". "PHP script to search an element from an array" ."</h2>" ."<br><br>";

	$arr=[1,2,3,4,5,6,7,8,9];
	echo "Array = ";
	foreach ($arr as $e) {
		echo $e .",";
	}

	echo "<br>Searching for 11...<br>";

	foreach ($arr as $e) {
		if($e===11){
			echo "found";
			break;
		}
	}

	echo "<br>Searching for 5...<br>";

	foreach ($arr as $e) {
		if($e===5){
			echo "found";
			break;
		}
	}



?>