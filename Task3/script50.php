<?php
//Write a PHP script to filter the elements of an array based on a specified condition using
//the array_filter() function.

// User-defined function to filter odd numbers
function filterOdd($value) {
    return $value % 2 != 0;
}

// Sample array
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Filter the array to keep only odd numbers
$filteredArray = array_filter($array, "filterOdd");

// Display the filtered array
echo "Original array: ";
print_r($array);

echo "Filtered array (keeping only odd numbers): ";
print_r($filteredArray);
?>
