<?php 

	echo "<h2>". "Printing Shapes With Loops" ."</h2>" ."<br><br>";

	echo "<table border='1' width='100px' >";
		echo "<tr>";
			echo "<td>";
				for ($i=0; $i < 3; $i++) { 
					for ($j=0; $j < $i+1; $j++) { 
						echo "*";
					}
					echo "<br>";
				}
			echo "</td>";
			echo "<td>";
				for ($i=3; $i > 0; $i--) { 
					for ($j=1; $j < $i+1; $j++) { 
						echo $j;
					}
					echo "<br>";
				}
			echo "</td>";
			echo "<td>";
				$x=["A","B","C","D","E","F"];
				$y=0;
				for ($i=0; $i < 3; $i++) { 
					for ($j=$y; $j < $i+1; $j++) { 
						echo $x[$j];
						$y=$j+1;
					}
					echo "<br>";
				}
			echo "</td>";
		echo "</tr>";
	echo "</table>";


?>