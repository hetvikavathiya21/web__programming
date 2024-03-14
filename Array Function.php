<?php
//count()
$number=array("One","Two","Three");
$result=count($number);
echo $result;
?>

<?php
//list() 
echo"<br><br>";
$info=array('coffee','brown','sweet');
list($drink,$color,$power)=$info;
echo"$drink is $color n $power make it tasty.";
?>

<?php
//in_array()
echo"<br><br>";
$number=array("One","Two","Three");
if(in_array("One",$number))
{
	echo"Array element is found";
}
else
{
	echo"Array element is not found";
}	

echo"<br><br>";
$number=array("One","Two","Three");
if(in_array("Four",$number))
{
	echo"Array element is found";
}
else
{
	echo"Array element is not found";
}	
?>

<?php
//current()
echo"<br><br>";
$number=array("Two","Three","Four");
$arr=current($number);
echo $arr;

echo"<br><br>";
$number=array("Three","Four","Five");
$arr=current($number);
echo $arr;
?>

<?php
//next()
echo"<br><br>";
$number=array("Two","Three","Four");
echo current($number)."<br>";
echo next($number)."<br>";
?>
  
<?php
echo"<br><br>";
//prev()
$student=array("Ketvi","Khushi","Riya");
echo next($student)."<br>";
echo prev($student);
?>

<?php
//end()
echo"<br><br>";
$student=array("Ketvi","Khushi","Riya");
echo next($student)."<br>";
echo prev($student)."<br>";
echo end($student);
?>

<?php
/*each()
error_reporting(1);
$people = array("Hetvi", "Khushi", "Riya"); 
print_r (each($people));
*/
?>

<?php
//sort()
echo"<br><br>";
$student=array("B","A","T");
sort($student);
print_r($student);
?>

<?php
//rsort()
echo"<br><br>";
$arr= array("Hetvi", "Khushi", "Riya");
rsort($arr);
print_r($arr);
?>

<?php
//asort()
echo"<br><br>";
$a=array("Hetvi"=>"k", "Khushi"=>"d", "Riya"=>"r");
asort($a);
print_r($a);
?>

<?php
//arsort()
echo"<br><br>";
$a=array("Hetvi"=>"a", "Khushi"=>"b", "Riya"=>"c");
arsort($a);
print_r($a);
?>

<?php
//array_merge()
echo"<br><br>";
$sub1=array("java"=>"40","php"=>"70");
$sub2=array("ds"=>"50",""=>"60");
print_r(array_merge($sub1,$sub2));
?>

<?php
//array_reverse()
echo"<br><br>";
$arr=array("Hetvi"=>"k", "Khushi"=>"d", "Riya"=>"r");
print_r(array_reverse($arr));
?>

<?php
//array_diff()
echo"<br><br>";
$a1=array("a"=>"apple","b"=>"ball","c"=>"cat");
$a2=array("a"=>"apple","b"=>"ball");
$result=array_diff($a1,$a2);
print_r($result);
?>

<?php
//array_shift()
echo"<br><br>";
$a=array("H"=>"Hetvi", "K"=>"Khushi", "R"=>"Riya");
echo array_shift($a);
print_r($a);
?>