<?php

$connection = mysql_connect("localhost", "yura", "1234");
	$db = mysql_select_db("blog");
	mysql_set_charset("utf-8");

	if( !$connection || !$db ){
		exit(mysql_error());
	}

?>	