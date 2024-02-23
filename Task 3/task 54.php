<?php
//function column
// Sample multidimensional array
$students = [
    ['id' => 1, 'name' => 'John', 'grade' => 'A'],
    ['id' => 2, 'name' => 'Jane', 'grade' => 'B'],
    ['id' => 3, 'name' => 'Alice', 'grade' => 'A'],
    ['id' => 4, 'name' => 'Bob', 'grade' => 'C']
];
// Extract the 'name' column
$names = array_column($students, 'name');
// Print the extracted column
print_r($names);
?>

