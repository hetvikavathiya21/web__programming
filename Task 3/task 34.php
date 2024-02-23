<?php
//in array function
$fruits = array("apple", "banana", "orange", "grapes");
$search_value = "orange";

if (in_array($search_value, $fruits)) {
    echo "The value '$search_value' exists in the array.\n";
} else {
    echo "The value '$search_value' does not exist in the array.\n";
}
?>
