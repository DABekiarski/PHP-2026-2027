<?php

$weeks = 3;
$days_of_the_week = 7;

//Cycle for the weeks
for($i = 1; $i <= $weeks; ++$i){
	echo "Week ".$i; 
	echo "<br>"; // New line
	
	//Cycle for the days
	for($j = 1; $j <= $days_of_the_week;$j++){
		if($j % 2 != 0){// Even days
			continue;
		}
		echo "Day ".$j;
		echo "<br>";// New line
	}
}

?>