<?php
$student=array("riya","priya","jeel","khushi","hetvi","namira",25,37,36,16,13,6);
print_r($student);
foreach($student as $mytemp)
{
	 echo $mytemp;
	 echo "<br>";
	
}

#asociate array
$student_detalis=array("name"=>"riya","rollno"=>"25","adress"=>"rajkot");
foreach($student_detalis as $std);
{
	echo $std;
	echo "<br>";
	
}	 

?>
