<?php

//Променливите трябва да започват с
// буква или _
// А-Z, а-z, _

//NOT VALID с променливите цифра/число

$name_of_employee = "Sam Smith";//VALID
$age_of_employee = 25; //VALID
$_salary = 5000.50; // VALID

//Константи
const MAX_WORKING_HOURS = 40;
define("MAX_HOURS","35");

echo "Name of the employee: ".$name_of_employee;
echo "<br>"; //New line
echo "Age of the employee: ".$age_of_employee;
echo "<br>"; //New line
echo "Salary: ".$_salary;
echo "<br>"; //New line
echo "Working hours: ".MAX_WORKING_HOURS;
?>