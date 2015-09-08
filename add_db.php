<?php
	include "controller.php";
		$add = new IntoDB();
		$image_name = $_GET['img_name'];
		$comments = $_GET['comm'];
		$date = time();
		$add->add_db($image_name, $comments, $date);
		header("Location: index.php");
	