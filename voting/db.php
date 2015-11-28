<?php
	exit("<h1>Error</h1>This application has been disabled and only remains for historical purposes :(");
	list($add, $user, $pass, $select) = file("db.data");
	$db = mysql_connect(rtrim($add), rtrim($user), rtrim($pass));
		if (!$db){
			die('Could not connect: '.mysql_error());
		}
		mysql_select_db(rtrim($select), $db);
?>