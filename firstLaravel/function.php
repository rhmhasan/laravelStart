<?php
function addTwoNumbers($a , $b) {
    $num1 = $a;
    $num2 = $b;

    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum" ; 
    echo PHP_EOL; // New line for better readability
} // Function to add two numbers

addTwoNumbers(100, 200); // Calling the function with two numbers

addTwoNumbers(50, 75); // Calling the function with another set of numbers