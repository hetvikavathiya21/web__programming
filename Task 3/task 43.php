<?php
//function array keys
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);
$keys = array_keys($person);
foreach ($keys as $key) {
    echo "Key: $key, Value: {$person[$key]}\n";
}
?>

