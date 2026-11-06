<?php

$n = 0;
$sum = 0;

//Cycle for the sum of numbers
while($n <= $_POST["number"]){
		//$_POST["number"] = 20
	$sum = $sum + $n;
	$n++;//n + 1
}

echo "The number is ".$sum;

?>