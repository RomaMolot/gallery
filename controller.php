<?php
require "connect_mysql.php";
class DateBase {
	function intoArray($data){
		$array = array();
		while($row = mysql_fetch_assoc($data)){
			$array[] = $row;
		}	
		return $array;
	}
	function filter_form($data,$v){
		if (!$v=="i"){
			$data = trim(strip_tags(stripcslashes($data)));
		}
		else
			$data = abs(strip_tags(stripcslashes($data)));
		return $data;
	}
}
class IntoDB extends DateBase{
	function add_db ($image_name,$comments,$date){
		$sql = "INSERT INTO image (image_name, comments, date)
				VALUES('$image_name', '$comments', '$date')";
		mysql_query($sql) or die (mysql_error());
		return(mysql_insert_id());
		}
	}
	/**
	* 
	*/
	class INSERT extends DateBase{
		function image()
		{
			$sql = "SELECT DISTINCT image_name FROM image";
			//mysql_query($sql) or die (mysql_error());
			$array= mysql_query($sql) or die (mysql_error());
			$array = $this->intoArray($array);
			return($array);
		}
	}

	/**
	* 
	*/
	/*class UPL_IMG extends DateBase
	{
		function upl(argument)
		{
			# code...
		}
	}*/
?>