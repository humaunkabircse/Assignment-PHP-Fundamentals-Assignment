<?php

/* Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.
*/

$number = 16;
$remainder = $number % 2;

if($remainder == 0){
    echo "The number is even";
}else{
    echo "The number is odd";
}

