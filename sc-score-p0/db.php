<?php
	$db = mysql_connect("hostname", "root", "password");
		if (!$db){
			die('Could not connect: '.mysql_error());
		}
		mysql_select_db("scscore_db", $db);
?>
