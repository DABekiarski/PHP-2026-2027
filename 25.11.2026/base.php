<?php
//Отварящ таг

//Променливи и константи
$number = 5; // Променлива

const MAX = 200;
define("MIN", "50");

//Функции

function sum(){
	$sum = MAX + MIN; // Събиране
	echo "The sum is ".$sum;
}

//Възлагам задача на функцията
sum();

//Затварящ таг
?>