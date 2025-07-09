<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // Indexed array
// This is an indexed array, where each element is accessed by its index (0 to9).
// For example, $numbers[0] will give you 1, $numbers[1] will give you 2, and so on.
// You can also use a loop to iterate through the array and print each number.  
$moreNumbers = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$country = [
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "China" => "Beijing",
    "Japan" => "Tokyo",
    "Germany" => "Berlin",
    "France" => "Paris",
    "Italy" => "Rome",
];


$items = count($numbers); // Count the number of items in the numbers array
echo "Total items in the numbers array: $items";PHP_EOL;
