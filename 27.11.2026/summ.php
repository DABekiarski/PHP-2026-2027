<?php
//Структура на програма

//Променливите и константите
$a = 5;
$b = 10;

//Константи
const MAX = 200;
define("MIN","50");

//Функции
function sum(){
	$sum = MAX + MIN; //200+50
	echo "The sum is ".$sum;
}

//Задача за функцията
sum();

?>