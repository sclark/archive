<?php include('db.php'); ?>
<?php
if (isset($_GET['name']) && isset($_GET['score'])){
	$query = mysql_query("SELECT * FROM users WHERE name = '".$_GET['name']."'");
	if (mysql_num_rows($query) == 0){
		if (!mysql_query("INSERT INTO users(name,score,time) values('".$_GET['name']."', '".$_GET['score']."', now())")){
			die('<font color="red"><strong>Error: ' . mysql_error().'</strong></font>');
		}
		else{
			echo "<b><font color='green'>GOOD! (First score report submitted!)</font></b>";
		}
	}
	else{
		if (!mysql_query("UPDATE users SET time = now(), score = ".$_GET['score']." WHERE name = '".$_GET['name']."'")){
			die('<font color="red"><strong>Error: ' . mysql_error().'</strong></font>');
		}
		else{
			echo "<b><font color='green'>GOOD!</font></b>";
		}
	}
}
else{
	echo '<font color="red"><strong>Error: Score and Name data not included in GET request!</strong></font>';
}
?>