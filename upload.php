<?php
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST")
{  if ($_FILES["file"]["error"]>0 )
{
         die("try again");
}
    
		             $name=$_FILES["file"]["name"];
					 $type=$_FILES["file"]["type"];
					 $get_type=ltrim(strstr($type,"/",false),"/");
					 $tmp_name=$_FILES["file"]["tmp_name"];
		             $size=$_FILES["file"]["size"];

         $path="img/".$name;
             if(file_exists($path)){
             	echo "file already exist";
             } else
             { if ($size>1024*1024) {
             	echo "file should be less than 500 KB";
             } else {
				 $extn=array("jpg","jpeg","png","bmp","gif");
             	if(array_search($get_type,$extn)){
             		if(move_uploaded_file($tmp_name,$path)){
             		echo "file uploaded successfully";

             	}else{
             		echo "only jpg,bmp,png,gif";
             	}
             }
             	

             }

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload file</title>
</head>
<body>
	<h1>upload image</h1>
	<p><a href="view.php">view images</a></p>
	<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
	
		<table>
			<tr>
				<td><input type="file" name="file"> upload file</td>
				<td><input type="submit">submit</td>
			</tr>
		</table>
	</form>
</body>
</html>