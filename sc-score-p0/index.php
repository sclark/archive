<?php include('db.php'); ?>
<html>
<head>
	<title>sc-ubuntu-p0 Rankings</title>
	<meta http-equiv="refresh" content="5">
</head>
<body>
	<?php
	
	$query = mysql_query("SELECT * FROM users");
	if (mysql_num_rows($query) == 0){
		echo "Nobody has registered yet!";
	}
	
	$scores = array();
	$data = array();
	$i = 0;
	while ($user = mysql_fetch_assoc($query)) {
		$scores[$i]=$user['score'];
		$data[$i]['name']=$user['name'];
		$data[$i]['score']=$user['score'];
		$data[$i]['time']=$user['time'];
		$i++;
	}
	
	array_multisort($scores, SORT_DESC, $data);	
	
	echo "<table cellpadding=4px>";
	$i = 0;
	while ($i < count($scores)) {
		echo "<tr>";
		if (max($scores) == $data[$i]['score'] && max($scores) >= 0) echo "<td><img src='crown.png' width=20px height=15px> <font color='green'><b>".$data[$i]['name']."</b></font></td><td><font color='green'><b>".$data[$i]['score']."</b></font></td>";
		else echo "<td>".$data[$i]['name']."</td><td>".$data[$i]['score']."</td>";
		if (!isset($_GET['notime'])) echo "<td><font size=2>".$data[$i]['time']."</font></td>";
		echo "</tr>";
		$i++;
	}
	echo "</table>";
	?>
</body>
</html>
