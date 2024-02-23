<?php
// function array reduce
$numbers = [1, 2, 3, 4, 5]
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);
echo "Sum of array elements: $sum\n
$product = array_reduce($numbers, function($carry, $item) {
    return $carry * $item;
}, 1);

echo "Product of array elements: $product\n";
?>
