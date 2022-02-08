<?php 

	echo "<h2>". "PHP script to find the largest number". "</h2>" ."<br><br>";

	function check($number1,$number2){
		echo "Given number 1 = ". $number1 . "<br>";
		echo "Given number 2 = ". $number2 . "<br>";

		if($number1>$number2){
			echo $number1 . " is greater then " . $number2 . "<br><br>";
		}
		else if($number2>$number1){
			echo $number2 . " is greater then " . $number1 . "<br><br>";
		}
		else{
			echo $number2 . " is equal to " . $number1 . "<br><br>";
		}
	}

	check(10,11);
	check(11,11);
	check(12,10);

	


?>