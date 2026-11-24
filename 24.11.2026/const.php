<?php
//Отварящ таг

//В началото са променливите и константите
//Библиотеки

$number = 5; // Променлива
$number2 = 10;

const MAX = 200; // Константа MAX
define("MIN", "50"); // Константа MIN

//Функции

function sum(){ //Функция за събиране
	$sum = MIN + MAX;
	echo "The sum is ".$sum;
}

//Извикваме функцията, даваме задача
sum();

echo "<br>"; // New line
var_dump($number);

//Затварящ таг
?>