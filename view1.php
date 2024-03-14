<?php
$con = mysqli_connect("localhost","root","","b2exam");
$q="SELECT * FROM `student`";
$exe=mysqli_query($con,$q);
$num=mysqli_num_rows($exe);

echo"<table border=1 bgcolor=pink><tr><td>Name</td><td>RollNo</td><td>City</td>
<td>Mo</td><td>Dept</td></tr>";
for($i=1;$i<=$num;$i++)
{
$fetch=mysqli_fetch_row($exe);
echo"<tr><td>$fetch[0]</td><td>$fetch[1]</td><td>$fetch[2]</td><td>$fetch[3]</td><td>$fetch[4]</td></tr>";
}
echo"</table>";
?>