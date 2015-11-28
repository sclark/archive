<?php session_start();
include('db.php');?>

<html>
	<head>
		<title>Vote4Office</title>
	</head>
	<body>
		<?php
		if (isset($_SESSION['user'])){
			if ($_SESSION['user'] == 'admin'){
				if (isset($_POST[username])){
					$user = $_POST[username];
					$password = $_POST[password];
					$db_query = mysql_query("SELECT * FROM users WHERE username = '" . $user . "'");
					if (mysql_num_rows($db_query) == 0){
						if (!mysql_query("INSERT INTO users(username,password) values('" . $user . "', md5('" . $password . "'))")){
							die('Error: ' . mysql_error());
						}
					}
					else
						die("<center><span style=\"color:#ff0000\">" . $user . " already exists!</span></center>
						<head><meta http-equiv=\"refresh\" content=\"2;url=add_user.php\"></head>");
					echo "<center>" . $user . " Added!</center>
					<head><meta http-equiv=\"refresh\" content=\"2;url=add_user.php\"></head>";
				}
				else{
					echo
					"<center>
						<table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
							<tr>
								<td bgcolor='blue'>
									<table cellpadding='0' cellspacing='0' border='0' width='100%'>
										<tr>
											<td bgcolor='blue' align=center style='padding:2;padding-bottom:4'>
												<b>
													<font color='white' face='vernada,arial'>
													Add User
													</font>
												</b>
											</tr>
										</th>
										<tr>
											<td bgcolor='white' style='padding:5'>
											<br>
											<center>
												<table>
													<form action='add_user.php' method='post'>
														<tr><td>Login:</td><td><input type='text' id='username' name='username'></td></tr>
														<tr><td>Password:</td><td><input type='password' id='password' name='password'></td></tr>
														<tr><td>&nbsp;</td><td><input type='submit' value='Add' onClick='clicked()'></td></tr>
													</form>
													
													<center>
													<tr><td>&nbsp</td></tr>
													<tr><td><b>Current Users:<b></td></tr>";
													
					$db_query= mysql_query("SELECT * FROM users");				
					echo "<tr>
							<td>User ID</td>
							<td>Username</td>
						</tr>";
										
					while($record = mysql_fetch_array($db_query)){
						echo "<tr>";
						echo"<td>" . $record['id'] . "</td>";
						echo"<td>" . $record['username'] . "</td>";
						echo"</tr>";
					}
					
					echo
					"								</center>
												</table>
											</center>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</center>";
				}
			}
			else{
				echo "<center>You do not have rights to this page!</center>";
			}
		}
		else{
			echo "<center>You are not logged in!</center>";
		}
		?>
	</body>
</html>