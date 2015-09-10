<?php
	include "controller.php";
	include('classSimpleImage.php');
	header("Content-Type: text/html; charset=utf-8");
		$uploads_dir = 'uploads';
		if($_FILES['pictures']['error']==0&&!empty($_POST["comments"])){
			
			/*------Добавление изображения в папку---------*/
			$t = $_FILES['pictures']['tmp_name'];
			$n = $_FILES['pictures']['name'];
			move_uploaded_file($t, "$uploads_dir/$n");
		   $image = new SimpleImage();
		   $image->load($n);
		   $image->resize(250, 250);
		   $image->save("uploads/small/small_$n");
			
			/*------Добавление даных в базу----------------*/
			$image_name = $n;
			$comments = $_POST['comments'];
			$add = new IntoDB();
			$date = time();
			$add->add_db($image_name, $comments, $date);	
			header("Location: index.php");		
	}
?>
   