<?php
//Create a PHP script that uses the array_reduce() function to apply a callback function to
the elements of an array and return a single value.

// User-defined function to calculate the sum of elements
function sum($carry, $item) {
    $carry += $item;
    return $carry;
}

// Sample array
$array = array(1, 2, 3, 4, 5);

// Apply the user-defined function to the elements of the array using array_reduce
$result = array_reduce($array, "sum");

// Display the result
echo "Sum of elements in the array: $result";
?>
