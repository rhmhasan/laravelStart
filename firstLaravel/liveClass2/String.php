<?php
$name = "John Doe";

echo strlen($name) . PHP_EOL; // Outputs the length of the string
echo str_word_count($name) . PHP_EOL; // Outputs the number of words in the string
echo strrev($name) . PHP_EOL; // Outputs the string in reverse order
echo str_replace("John","Hasan", $name) . PHP_EOL; // Outputs the the string replace.
echo strtolower($name) . PHP_EOL; // Outputs the string in lowercase
echo strtoupper($name) . PHP_EOL; // Outputs the string in uppercase
echo ucfirst($name) . PHP_EOL; // Outputs the string with the first character in uppercase
echo ucwords($name) . PHP_EOL; // Outputs the string with the first character of each word in uppercase
echo trim($name) . PHP_EOL; // Outputs the string with whitespace removed from both ends
echo md5($name) . PHP_EOL; // Outputs the MD5 hash of the string
echo htmlspecialchars($name) . PHP_EOL; // Converts special characters to HTML entities
echo str_repeat($name, 2) . PHP_EOL; // Outputs the string repeated twice

$color = "red, green, blue, yellow, orange, purple";

$colorsArray = explode(", ", $color); // Converts the string to an array
print_r($colorsArray); // Outputs the array

$colorArray = ["red", "green", "blue", "yellow", "orange", "purple"];
$colorString = implode(", ", $colorArray); // Converts the array to a string
echo $colorString . PHP_EOL; // Outputs the string


