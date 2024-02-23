<?php
// function array filter
// Sample array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
$evenNumbers = array_filter($numbers, function($value) {
    return $value % 2 == 0;
});
echo "Even numbers: " . implode(", ", $evenNumbers) . "\n";
$oddNumbers = array_filter($numbers, function($value) {
    return $value % 2 != 0;
});
echo "Odd numbers: " . implode(", ", $oddNumbers) . "\n";
?>
