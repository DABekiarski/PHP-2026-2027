<?php
$k = 0;

//Cycle for finding 7s
do {
	if($k % 10 == 7){ //Logical condition
		echo $k;
		echo "<br>"; //New line
	}
	
	$k++;// k + 1
}while($k <= $_POST["seven"]);

?>