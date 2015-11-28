<?php session_start();
include('db.php');?>

<html>
	<head>
		<title>Vote4Office</title>
	</head>
	<body>
	<center>
		<?php
		if (isset($_SESSION['user']) && $_SESSION['user']=='admin'){
			$canadates = file("canadates.data");
		
			echo "<table border=\"3\">";
											
			$query1= mysql_query("SELECT * FROM votes");		
			
			echo "<tr>";
			echo "<td></td>";
			for ($i=0; $i<4; $i++){
				echo "<td>".$canadates[$i]."</td>";
			}
			echo "</tr>";		
			for($rank = 1; $rank<=3; $rank++){
				echo "<tr>";
				echo "<td>Rank ".$rank."</td>";
				for ($i=0; $i<count($canadates); $i++){
					echo "<td>".mysql_result(mysql_query("SELECT ".$canadates[$i]." FROM votes WHERE rank=".$rank), 0)."</td>";
				}
				echo"</tr>";
			}
						
			echo "</table>";
			
			echo "<br><br>";
			
			echo "<table>";
			$max_votes = array(0);
			$max_name = array();
			for ($i=0; $i<count($canadates); $i++){
				$votes = mysql_result(mysql_query("SELECT ".$canadates[$i]." FROM votes WHERE rank=1"), 0);
				if ($votes > $max_votes[0]){
					$max_votes = array($votes);
					$max_name = array($canadates[$i]);
				}
				else if ($votes == $max_votes[0]){
					$max_votes[] = $votes;
					$max_name[] = $canadates[$i];
				}
			}
			if (count($max_votes) == 1){
				echo "The winner is:";
				echo "<li>".$max_name[0]."</li>";
			}
			else{
				$avaliable_canadates = $max_name;
				
				$max_votes = array(0);
				$max_name = array();
				for ($i=0; $i<count($canadates); $i++){
					if (in_array($canadates[$i], $avaliable_canadates)){
						$votes = mysql_result(mysql_query("SELECT ".$canadates[$i]." FROM votes WHERE rank=2"), 0);
						if ($votes > $max_votes[0]){
							$max_votes = array($votes);
							$max_name = array($canadates[$i]);
						}
						else if ($votes == $max_votes[0]){
							$max_votes[] = $votes;
							$max_name[] = $canadates[$i];
						}
					}
				}
				if (count($max_votes) == 1){
					echo "The winner is:";
					echo "<li>".$max_name[0]."</li>";
				}
				else{
					$avaliable_canadates = $max_name;
				
					$max_votes = array(0);
					$max_name = array();
					for ($i=0; $i<count($canadates); $i++){
						if (in_array($canadates[$i], $avaliable_canadates)){
							$votes = mysql_result(mysql_query("SELECT ".$canadates[$i]." FROM votes WHERE rank=3"), 0);
							if ($votes > $max_votes[0]){
								$max_votes = array($votes);
								$max_name = array($canadates[$i]);
							}
							else if ($votes == $max_votes[0]){
								$max_votes[] = $votes;
								$max_name[] = $canadates[$i];
							}
						}
					}
					if (count($max_votes) == 1){
						echo "The winner is:";
						echo "<li>".$max_name[0]."</li>";
					}
					else{
						echo "There has been a pefect tie between:";
						for ($i = 0; $i < count($max_name); $i++){
							echo "<li>".$max_name[$i]."</li>";
						}
					}
				}
			}
			echo "</table>";
		}
		else{
			echo "<center>You do not have rights to this page!</center>";
		}
		?>
	</center>
	</body>
</html>