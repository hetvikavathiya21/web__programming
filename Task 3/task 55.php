<?php
// function array key last
// Sample array
$fruits = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry'
];

// Retrieve the first key
$firstKey = array_key_first($fruits);
echo "First key: $firstKey\n";

// Retrieve the last key
$lastKey = array_key_last($fruits);
echo "Last key: $lastKey\n";
?>

