<?php
// function array flip
$original_array = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);
$flipped_array = array_flip($original_array);
print_r($flipped_array);
?>
