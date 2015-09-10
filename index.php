<!DOCTYPE html>
<html>
	<title>
		Image gallery
	</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="lightbox/lightbox.js"></script>
	<body>
	<div class="site">
		<div class="header"></div>
		<div class="content">	
			<div class="out_img">
				<?php
				include "out_img.php";
				$pre = "uploads/small/small_";
				$p = "uploads/";
				$counter = 0;
					foreach ($name as $key) {
						$counter=$counter+1;
						foreach ($key as $value) {
						echo "<div class='image $counter'>"; 
						echo "<a href='$p$value' rel='lightbox'><img src='$pre$value'></a>";
						echo "</div>";
						}
					}
				?>
			</div>
			<a href="add_img.php">Download image</a>
			<a href="add_img.php">Download image</a>
			
		</div>
		<div class="bottom">Molodyko Roman</div>
	</div>
	</body>
</html>