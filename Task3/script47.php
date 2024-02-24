<?php
//Write a PHP script that applies a user-defined function to all elements of an array using
//the array_map() function.

function square($num) {
    return $num * $num;
}

$array = array(1, 2, 3, 4, 5);

$result = array_map("square", $array);

echo "Original array: ";
print_r($array);

echo "Array after applying the square function: ";
print_r($result);
?>

