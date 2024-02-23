<html>
   <body>
       <form method="post">
	      Enter Value : <input type="text" name="val1" /><br><br>
		  <input type="submit" />
	   </form>
   </body>
</html>

<?php

//Create a PHP script that checks whether a given number is even or odd and displays the result.

$val=$_REQUEST['val1'];
if($val%2==0)
{
	echo "Even Number...";
}
else
{
	echo "Odd Number...";
}

?>