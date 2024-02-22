<?php
#multidimential array

$student_master=array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12),array(13,14,15),
array(16,17,18),array(19,20,21),array(22,23,24));
foreach($student_master as $row)
{
	foreach($row as $value)
	{
	  echo "$value";	
	}
	echo "<br>";
}
?>
