<?php
//function array intersect
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$difference = array_diff($array1, $array2);
print_r($difference);
?>
