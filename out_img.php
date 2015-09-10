<?php
	include "controller.php";
	$img_name = new OutImg;
	$id_im = new OutId;
	$pages=$_GET["page"];
	$count = 6;// Количество записей на странице
	//$pages = 1;// Узнаём номер страницы
	$shift = $count * ($pages-1);// Смещение в LIMIT. Те записи, порядковый номер которого больше этого числа, будут выводиться.
	$name = $img_name->out_in_db($shift, $count);
	
	
		/*foreach ($name as $key) {
			foreach ($key as $value) {
					$v=$value;	
					$id = $id_im->out_id($v);
					
					}
				}*/
	

	
	//print_r($name);
	//print_r($name);
	
	/*$pre = "uploads/small/small_";
	
	foreach ($name as $key) {
		//echo "<tr>";
		foreach ($key as $value) { 
			echo "<img src='$pre$value'>";
		}
	}
	*/
?>