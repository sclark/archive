<?php 
	session_start();
	include('db.php');
?>
<html>
<head>
<title>Vote4Office</title>
</head>
<body>
<?php 
	if (isset($_POST["username"])){
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$db_query = mysql_query("SELECT * FROM users WHERE username = '" . $user . "'");
		if (mysql_num_rows($db_query) == 1){
			$record = mysql_fetch_array($db_query);
			if (md5($pass) == $record["password"]){
				if ($user != "retrieval"){
					echo "<center>Welcome, " . $user . "! You are now logged in. <br/></center>
					<head><meta http-equiv=\"refresh\" content=\"1;url=/\"></head>";
				}
				$_SESSION['user']= $user;
				$_SESSION['md5_pass']= md5($pass);
			}
		}
		else
			echo "<center><span style=\"color:#ff0000\">Sorry, wrong credentials.<br/></span></center>
			<head><meta http-equiv=\"refresh\" content=\"3;url=/login.php\"></head>";
	}
	else
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
										Enter Your Credintals
										</font>
									</b>
								</tr>
							</th>
							<tr>
								<td bgcolor='white' style='padding:5'>
								<br>
								<center>
									<table>
										<form action='login.php' method='post'>
											<tr><td>Login:</td><td><input type='text' id='username' name='username'></td></tr>
											<tr><td>Password:</td><td><input type='password' id='password' name='password'></td></tr>
											<tr><td>&nbsp;</td><td><input type='submit' value='Enter' onClick='clicked()'></td></tr>
										</form>
									</table>
								</center>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</center>";
?>

</body>
</html>