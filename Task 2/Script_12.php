<html>
   <body>
       <form method="post">
	      Enter Str1 : <input type="text" name="str1" /><br>
		  Enter Str2 : <input type="text" name="str2" /><br><br>
		  <input type="submit" />
	   </form>
   </body>
</html>

<?php

//Write a PHP script to concatenate two strings and display the combined result.

$sr1=$_REQUEST['str1'];
$sr2=$_REQUEST['str2'];
echo $sr1." ".$sr2;
?>