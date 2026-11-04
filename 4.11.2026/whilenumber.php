<?php
$n = 0;//Variable n equals 0
$sum = 0;

//Cycle
while($n <= $_POST["number245"]){
	$sum = $sum + $n;
	$n++;
}

echo "The sum is ".$sum;

?>