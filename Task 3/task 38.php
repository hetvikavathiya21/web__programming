<?php
//function arry unshift
$queue = array("orange", "banana");
print_r($queue);
$removed_element = array_shift($queue);
echo "Removed element: " . $removed_element . "\n";
print_r($queue);
array_unshift($queue, "apple");
print_r($queue);
?>