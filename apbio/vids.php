<?php echo '<div class="bluetable">
				<table>
					<tr><th>Title</th><th>Video</th><th>Notes</th></tr>';
						$ison = False;
						$query= mysql_query("SELECT * FROM vids");
						while($record = mysql_fetch_array($query)){

							if ($ison) echo "<tr class='on'>";
							else echo "<tr>";
							$ison = !$ison;

							if (isset($record['title'])) $title = $record['ch']." ".$record['title'];
							else {
								if (strpos($record['vid'], 'youtu') !== False) { //only youtu because some links are youtu.be
									if ($content = file_get_contents("http://youtube.com/get_video_info?video_id=".substr($record['vid'], -11))) {
										parse_str($content, $stats);
										$title = $stats['title'];
									}
									else $title = "No Title";
								}
								else $title = "Not a YouTube Video";
							}
							echo "<td>" . $title . "</td>";
							if (substr($record['vid'], 0, 4) != "http") $record['vid'] = "docs/".$record['vid'];
							echo "<td><a href='" . $record['vid'] . "' target='_blank'>Video</a></td>";
							if ($record['notes'] == "lab book") echo "<td>(See Lab Book)</td>";
							else echo "<td><a href='docs/notes/" . $record['notes'] . "' target='_blank'>Notes</a></td>";

							echo "</tr>";
						}
				echo '</table>
			</div>';
?>
