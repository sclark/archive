<?php session_start();
include('db.php');?>

<html>
<head>
	<title>Vote4Office</title>
</head>

<body>
<?php
	if(isset($_POST['ballot'])) 
	{
		$p1 = $_POST['priority1'];
		$p2 = $_POST['priority2'];
		$p3 = $_POST['priority3'];
		$eMsg = "";
		$error = False;
		
		if(empty($p1) or empty($p2) or empty($p3)) 
		{
			$eMsg = "<li>You forgot to select 1 or more choices!</li>";
			$error = True;
		}
		
		if ($p1==$p2 or $p1==$p3 or $p2==$p3)
		{
			$eMsg .= "<br><li>You selected the same option multiple times!</li>";
			$error = True;
		}
		
		if($error) 
		{
			echo("<p>The following errors have been dectected:</p>");
			echo("<span style=\"color:#ff0000\"><ul>" . $eMsg . "</ul></span>");
			echo("<br><br>");
		} 
		else 
		{
			echo "You Selections: <br>";
			echo "First Choice: $p1 <br>";
			echo "Second Choice: $p2 <br>";
			echo "Third Choice: $p3 <br>";
			
			$query = mysql_result(mysql_query("SELECT ".$p1." FROM `votes` WHERE rank=1"), 0);
			mysql_query("UPDATE votes SET ".$p1."=".strval($query[$p1]+1)." WHERE rank=1");
			
			$query = mysql_result(mysql_query("SELECT ".$p2." FROM `votes` WHERE rank=2"), 0);
			mysql_query("UPDATE votes SET ".$p2."=".strval($query[$p2]+1)." WHERE rank=2");
			
			$query = mysql_result(mysql_query("SELECT ".$p3." FROM `votes` WHERE rank=3"), 0);
			mysql_query("UPDATE votes SET ".$p3."=".strval($query[$p3]+2)." WHERE rank=3");
			
			echo "<br>Sucessfully submitted to scoring server!<br><br>Thank You for using Vote4Office!";
				
			exit();
		}
	}
?>

<?php
	$canadates = file("canadates.data");
?>

<form action="vote.php" method="post">
	<label for='priority1'>Select your first choice from the drop down menu below...</label><br>
	<select name="priority1">
		<option value="">Select an option...</option>
		<?php
			for ($i=0; $i<count($canadates); $i++){
				echo "<option value=\"".rtrim($canadates[$i])."\">".rtrim($canadates[$i])."</option>";
			}
		?>
	</select> 
	
	<br>
	<br>
	
	<label for='priority2'>Select your second choice from the drop down menu below...</label><br>
	<select name="priority2">
		<option value="">Select an option...</option>
		<?php
			for ($i=0; $i<count($canadates); $i++){
				echo "<option value=\"".rtrim($canadates[$i])."\">".rtrim($canadates[$i])."</option>";
			}
		?>
	</select> 
	
	<br>
	<br>
	
	<label for='priority3'>Select your third choice from the drop down menu below...</label><br>
	<select name="priority3">
		<option value="">Select an option...</option>
		<?php
			for ($i=0; $i<count($canadates); $i++){
				echo "<option value=\"".rtrim($canadates[$i])."\">".rtrim($canadates[$i])."</option>";
			}
		?>
	</select> 
	
	<br>
	<br>
	
	<input type="submit" name="ballot" value="Cast Your Ballot" />
</form>
</body>
</html>