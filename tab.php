<html>
<body>
<form action="tab.php" method="get">
<tr><td>Enter start value:</td><td><input type="text" name="start" ></td></tr><br>
<tr><td>Enter end value:</td><td><input type="text" name="end"></td></tr>
<input type="submit" name="Submit">


<?php
$myval1=$_REQUEST['start'];
$myval2=$_REQUEST['end'];
 echo"<table border=1 align=center bordercolor='red'>";
  for($j=1;$j<=10;$j++)
{
	 
     echo "<tr>";
		  for($i=$myval1; $i<=$myval2; $i++)
  {
	 
	 $tab=$i*$j;
		 
	 echo"<td>$i</td>
	 <td>x</td>
	 <td>$j</td>
	 <td>=</td>
	 <td>$tab</td>";
	 
	 
	 	 
	
      
    }
	echo "</tr>";
 }
 echo" </table>";
?>
