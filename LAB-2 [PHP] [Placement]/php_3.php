<?php 

	echo "<h2>". "PHP script to find whether a given number is odd or even" ."</h2>" ."<br><br>";

	function check($number){
		echo "Given number 1 = ". $number . "<br>";
		if($number%2===0){
			echo "Its a even number" . "<br><br>";
		}else{
			echo "Its a odd number" . "<br><br>";
		}
	}

	check(10);
	check(11);
	check(12);

	


?>