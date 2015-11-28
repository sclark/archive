<html>
	<head>
		<title>Vote4Office</title>
	</head>
	<body>
	<center>
	<?php
		if (isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["sqladd"]) && isset($_POST["sqluser"]) && isset($_POST["sqlpass"]) && isset($_POST["sqldb"])){
		
			//Create Admin
			if ($_POST["password"] == $_POST["confirm"]){
				$db = mysql_connect($_POST["sqladd"], $_POST["sqluser"], $_POST["sqlpass"]);
				if (!$db){
					echo "Could not connect to database!<br>Try again, but if the problem persists, check your credentials!";
					exit();
				}
				mysql_select_db($_POST["sqldb"], $db);
				if (!mysql_query("CREATE TABLE users(id int NOT NULL AUTO_INCREMENT, username varchar(30), password varchar(30), PRIMARY KEY (id));")){
					echo "Could not create users table!";
					exit();
				}
				if (!mysql_query("INSERT INTO users(username,password) values('admin', md5('" . $_POST["password"] . "'))")){
					echo "Could not create admin user, check that your Users Database exists!";
					exit();
				}
				echo "Admin created!";
			}
			else{
				echo "Passwords did not match!";
				exit();
			}
			
			//Create db.data
			$db_file = "db.data";
			$db_text = $_POST["sqladd"]."\n".$_POST["sqluser"]."\n".$_POST["sqlpass"]."\n".$_POST["sqldb"];
			
			file_put_contents($db_file, $db_text);
			
			echo "Created database connections file! (remember to chmod 640 this file)";
			
			//Create canadate.data
			$can_file = "canadates.data";
			$can_text = "";
			$cans = explode(",",$_POST["cans"]);
			
			for ($i = 0; $i < count($cans); $i++){
				$can_text .= $cans[$i];
				if ($i < count($cans)-1){
				$can_text .= "\n";
				}
			}
			
			file_put_contents($can_file, $can_text);
			
			echo "Created canadates file!";
		}
		else{
			echo
			"<center>
				<table>
					<tr>
						<center>
							<form action='setup.php' method='post'>
								<tr><td>Create Admin Password:</td><tr>
								<tr><td>Password:</td><td><input type='text' id='password' name='password'></td></tr>
								<tr><td>Confirm Password:</td><td><input type='text' id='confirm' name='confirm'></td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>MySQL Database:</td><tr>
								<tr><td>Host Address:</td><td><input type='text' id='sqladd' name='sqladd'></td></tr>
								<tr><td>Users Database:</td><td><input type='text' id='sqldb' name='sqldb'></td></tr>
								<tr><td>Username:</td><td><input type='text' id='sqluser' name='sqluser'></td></tr>
								<tr><td>Password:</td><td><input type='text' id='sqlpass' name='sqlpass'></td></tr>
								<tr><td>&nbsp;</td><td><input type='submit' value='Save' onClick='clicked()'></td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>Canadates:</td><tr>
								<tr><td>Canadates:</td><td><input type='text' id='cans' name='cans'></td></tr>
							</form>
						</center>
					</tr>
				</table>
			</center>";
		}
	?>
	</center>
	</body>
</html>