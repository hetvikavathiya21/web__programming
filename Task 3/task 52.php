<?php
// Initial associative array
$person = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
$person['country'] = 'USA';
print_r($person);
$person += ['occupation' => 'Engineer', 'hobby' => 'Reading'];
print_r($person);
?>
