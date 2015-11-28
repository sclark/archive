<?php
			echo '<div class="bluetable">
				<table>
					<tr><th>Term</th><th>Definition</th></tr>';
						$ison = False;
						$query= mysql_query("SELECT * FROM vocab");
						while($record = mysql_fetch_array($query)){
							if ($ison) echo "<tr class='on'>";
							else echo "<tr>";
							$ison = !$ison;
							echo "<td>" . $record['term'] . "</td>";
							echo "<td>" . $record['def'] . "</td>";
							echo "</tr>";
						}
				echo '</table>
			</div>';

?>