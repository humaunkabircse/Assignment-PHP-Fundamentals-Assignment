<?php

/*
Task 5: Weather Report
Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
*/

$temperature = 19;

if ($temperature < 10){
    echo "It's freezing!";
}
else if($temperature < 20)
{
    echo "It's cool.";
}
else
{
    echo "It's warm.";
}