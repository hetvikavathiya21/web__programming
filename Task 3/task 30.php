<?php
//function unique
$numbers = array(1, 2, 3, 4, 2, 3, 5);
$unique_numbers = array_unique($numbers);

echo "Original array: \n";
print_r($numbers);

echo "\nArray with duplicates removed: \n";
print_r($unique_numbers);
?>
