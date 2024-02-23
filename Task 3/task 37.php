<?php
//functiom pop
$stack = array("orange", "banana");
print_r($stack);
array_push($stack, "apple");
print_r($stack);
$last_element = array_pop($stack);
echo "Popped element: " . $last_element . "\n";
print_r($stack);
?>
