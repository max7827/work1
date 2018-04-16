<?php 
if (!isset($_GET["filename"]) || empty($_GET["filename"])):
	die("<a href='view.php>Try Again</a>");
endif;
$name=base64_decode($_GET["filename"]);

$file="img/".$name;
header("content-Type:application/octet-stream");
header("content-Disposition:attachmant;filename=".$file);
readfile($file);

 ?>