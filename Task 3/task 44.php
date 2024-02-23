<?php
//function array vlaue
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);
$values = array_values($person);
foreach ($values as $value) {
    echo "Value: $value\n";
}
?>
