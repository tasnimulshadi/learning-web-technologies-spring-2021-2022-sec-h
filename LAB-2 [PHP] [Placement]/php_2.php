<?php 

	echo "<h2>". "PHP script to calculate the VAT" ."</h2>" ."<br><br>";

	$amount=100;
	$vat=15;

	echo "Amount = ". $amount . "<br>";
	echo "Vat = ". $vat . "%<br><br>";
	echo "Amount after vat = ". $amount-($amount*($vat/100)) . "<br>";


?>