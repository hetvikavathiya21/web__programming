<html>
   <body>
   <form>
      Enter Value : <input type="text" name=val />
	  <br><input type="submit" />
   </form>
   </body>
</html>

<?php

//Script to find the factorial of a given number and display the result.

$no=$_REQUEST['val'];
$fact=1;
for($i=$no;$i>=1;$i--)
{
	$fact=$fact*$i;
}
echo $fact." is a Factorial of ".$no;

?>