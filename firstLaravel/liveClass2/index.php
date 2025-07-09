<?php
// for ($i = 0; $i <15; $i++) {
//     echo  "Hello World <br>";
//     echo PHP_EOL;

// }

// array practice
// $numbur = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// $moreNumbur = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

// print_r($numbur);
// echo PHP_EOL;
// print_r($moreNumbur);

// echo $numbur[3];

$temInCelsius = readline("Enter temperature in Celsius: ");
$temInFahrenheit = ($temInCelsius * 9/5) + 32;
echo "Temperature in Fahrenheit: " . $temInFahrenheit . PHP_EOL;