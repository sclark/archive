<?php echo '<div class="bluetable">
				<table>
					<tr><th>Lab</th><th>Purpose</th><th>Conclusion</th><th>Procedure</th><th>Analysis</th></tr>';
						$ison = False;
						while($record = mysql_fetch_array($articles_query)){
							if ($ison) echo "<tr class='on'>";
							else echo "<tr>";
							$ison = !$ison;
							echo "<td>" . $record['lab'] . "</td>";
							echo "<td>" . $record['purpose'] . "</td>";
							echo "<td>" . $record['conclusion'] . "</td>";
							if (substr($record['procedure'], 0, 4) != "http") $record['procedure'] = "doc/".$record['procedure'];
							echo "<td><a href='" . $record['procedure'] . "' target='_blank'>Procedure</a></td>";
							if ($record['report'] == "lab book") echo "<td>(See Lab Book)</td>";
							else echo "<td><a href='doc/" . $record['report'] . "' target='_blank'>Analysis</a></td>";
							echo "</tr>";
						}
				echo '</table>
			</div>';
?>
