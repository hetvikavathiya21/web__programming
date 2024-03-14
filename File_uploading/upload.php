<?php
$myfile=$_FILES['file_upload'];
print_r($myfile);

$dir="myupload/";
$targetfile=$dir.basename($_FILES['file_upload']['name']);
echo $targetfile;
$move=move_uploaded_file($_FILES['file_upload']['tmp_name'],$targetfile)

?>