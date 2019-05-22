<?php
	$path="page/";
	$pages=scandir($path);
	$index=1;
	for($i=2;$i<count($pages);$i++)
	{
		echo "<a href='".$path.$pages[$i]."'>$index</a> | ";
		$index++;
	}
	
?>