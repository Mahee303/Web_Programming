<?php
//Develop a PHP script to split an array into chunks of a specified size using the
//array_chunk() function.

// Sample array
$array = array("apple", "banana", "orange", "grape", "kiwi", "mango", "pineapple");

// Specify the size of each chunk
$chunkSize = 3;

// Split the array into chunks of the specified size
$chunks = array_chunk($array, $chunkSize);

// Display the chunks
echo "Array split into chunks of size $chunkSize:\n";
print_r($chunks);
?>
