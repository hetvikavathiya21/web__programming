<?php
// function array_key exist
$fruits = array(
    "apple" => "red",
    "banana" => "yellow",
    "orange" => "orange",
    "grapes" => "purple"
);
$search_value = "orange";
if (in_array($search_value, $fruits)) {
    echo "The value '$search_value' exists in the array.\n";
} else {
    echo "The value '$search_value' does not exist in the array.\n";
}
?>
