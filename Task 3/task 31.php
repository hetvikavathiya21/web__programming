<?php
//array_search function
function searchInArray($array, $element) {
    $key = array_search($element, $array);
    if ($key !== false) {
        return "Element found at index: " . $key;
    } else {
        return "Element not found";
    }
}

$fruits = array("apple", "banana", "orange", "grapes");
$search_element = "banana";

echo searchInArray($fruits, $search_element);
?>
