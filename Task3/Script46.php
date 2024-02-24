<?php
//Develop a PHP script to fill an array with a specific value using the array_fill() function.(php)


$numElements = 5;
$fillValue = "apple";


$filledArray = array_fill(0, $numElements, $fillValue);


echo "Filled array: ";
print_r($filledArray);
?>
