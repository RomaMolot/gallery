<?php
	define("DB_HOST", "localhost");
	define("DB_LOGIN", "root");
	define("DB_NAME", "gallery");
	mysql_connect(DB_HOST,DB_LOGIN) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());
?>