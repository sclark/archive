<?php session_start();
include('db.php');?>

<html>
	<head>
		<title>Vote4Office</title>
	</head>
	<body>
	<center>
		<center>
			<table cellpadding='2' cellspacing='0' border='0' id='ap_table'>
				<tr>
					<td bgcolor='blue'>
						<table cellpadding='0' cellspacing='0' border='0' width='100%'>
							<tr>
								<td bgcolor='blue' align=center style='padding:2;padding-bottom:4'>
									<b>
										<font color='white' face='vernada,arial'>
										Welcome to Vote4Office.tk
										</font>
									</b>
								</tr>
							</th>
							<tr>
								<td bgcolor='white' style='padding:5'>
								<center>
									<?php
									if (isset($_SESSION['user'])){
										if ($_SESSION['user'] == 'admin'){
											echo"<a href=\"add_user.php\">Add A User</a><br>";
											echo"<a href=\"upload.php\">Upload</a><br>";
											echo"<br>";
										}
										echo"<a href=\"vote.php\">Vote</a><br>";
										echo"<a href=\"logout.php\">Logout</a><br>";
									}
									else{
										echo "<center><a href=\"login.php\">Login</a></center>";
									}
									?>
								</center>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</center>
	</center>
	</body>
</html>