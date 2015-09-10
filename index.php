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
		<div class="header"><h1>GALLERY</h1></div>
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
			<div class="pagination">
				<ul id="pagination_page">
					<li class="page 1"><a href="?page=1">1</a></li>
					<li class="page 2"><a href="?page=2">2</a></li>
					<li class="page 3"><a href="?page=3">3</a></li>
				</ul>
			</div>
			<div class"add"><a href="add_img.php">ADD AN IMAGE</a></div>	
		</div>
		</div>
	</body>
</html>