<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view images</title>
</head> 
<body> 
	<h1>view images</h1>
	<p>safsuyasfn</p>

	<p><a href="view.php">upload image</a></p>
	<br>
	
	<table align="center" width="1000px" border="1px solid black">
		<tr>
			<th  width="20%">Sr.No</th>
			<th  width="20%">Image </th>
			<th  width="20%">Image Name</th>
			<th  width="20%">Size</th>
			<th  width="20%">Download</th>
		</tr>
		 
			<?php 
			    $sr=1;
				foreach (scandir("img") as $files) {
				if ($files=="." || $files==".." ||$files=="_notes"):
						continue;
					endif;
				

			?>  <tr> 
				<td align="center"><?=$sr;?></td>
				<td align="center"><a href="img/<?=$files;?>" target="_blank"><img src="img/<?=$files;?>" width="50px"></a></td>
				<td align="center"><?=$files;?></td>
				<td align="center"><?=floor(filesize("img/".$files)/1024);?>KB</td>
				<td align="center"><a href="download.php?filename=<?=base64_encode($files)?>">Download</a></td>
			</tr>
			<?php  $sr++;
				}
			?>	
	</table>
</body>
</html>