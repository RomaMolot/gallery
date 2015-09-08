<?php
	header("Content-Type: text/html; charset=utf-8");
	//include "add_img.php";
	echo "string1";
	include('classSimpleImage.php');
		$uploads_dir = 'uploads';
		if($_FILES['pictures']['error']==0){
			$t = $_FILES['pictures']['tmp_name'];
			$n = $_FILES['pictures']['name'];
			move_uploaded_file($t, "$uploads_dir/$n");
			echo "string";
		   $image = new SimpleImage();
		   $image->load($n);
		   $image->resize(250, 250);
		   $image->save("uploads/small/small_$n");
	}
	$comments = $_POST['comments'];
	header("Location: add_db.php?img_name=$n&comm=$comments");
?>
   