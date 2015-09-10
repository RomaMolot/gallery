<?php
	include "controller.php";
	$img_name = new OutImg;
	$name = $img_name->out_in_db();
	/*$pre = "uploads/small/small_";
	
	foreach ($name as $key) {
		//echo "<tr>";
		foreach ($key as $value) { 
			echo "<img src='$pre$value'>";
		}
	}
	*/
?>