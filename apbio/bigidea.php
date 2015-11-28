<?php
				echo "<h1>Big Idea ".$bi."</h1>";
				echo "<p>";
				switch ($bi) {
					case 1:
						echo "The process of evolution drives the diversity and unity of life.";
						break;
					case 2:
						echo "Biological systems utilize free energy and molecular building blocks to grow, to reproduce and to maintain dynamic homeostasis.";
						break;
					case 3:
						echo "Living systems store, retrieve, transmit and respond to information essential to life processes.";
						break;
					case 4:
						echo "Biological systems interact, and these systems and their interactions possess complex properties.";
						break;
				}
				echo "</p>";
				echo "<br>";
				
				echo '<div class="bluetable">
				<table>
					<tr><th>Title</th><th>Artifact</th><th>Analysis</th></tr>';
				
						$ison = False;
						$query= mysql_query("SELECT * FROM bigidea");
						while($record = mysql_fetch_array($articles_query)){
							if ($record['num'] == $bi){
								if ($ison) echo "<tr class='on'>";
								else echo "<tr>";
								$ison = !$ison;
								echo "<td>" . $record['title'] . "</td>";
								if (substr($record['artifact'], 0, 4) != "http") $record['artifact'] = "doc/".$record['artifact'];
								echo "<td><a href='" . $record['artifact'] . "' target='_blank'>Artifact</a></td>";
								echo "<td>" . $record['analysis'] . "</td>";
								echo "</tr>";
							}
						}
						
				echo '</table></div>';
?>