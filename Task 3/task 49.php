<?php
//function array chunk
// Sample array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$chunks = array_chunk($numbers, 3);
foreach ($chunks as $chunk) {
    echo "[" . implode(", ", $chunk) . "]\n";
}
?>
