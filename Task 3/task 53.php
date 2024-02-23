<?php
//function array unique 
// Associative array with duplicate values
$colors = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'red',
    'd' => 'blue',
    'e' => 'green'
];
$uniqueColors = array_unique($colors)
print_r($uniqueColors);
?>
