<?php 

	echo "<h2>". "PHP script to print all the odd numbers between 10 to 100" ."</h2>" ."<br><br>";

	for ($i=10; $i < 100; $i++) { 
		if ($i%2!=0) {
			echo $i ."<br>";
		}
		
	}

	


?>