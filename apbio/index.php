<?php

if (!isset($_GET['p']) && !isset($_GET['bi']) && !isset($_GET['o'])){
	$page = "home";
}
else {
	if (isset($_GET['p'])){
		$page = $_GET['p'];
	}
	elseif (isset($_GET['bi'])){
		$bi = $_GET['bi'];
	}
	elseif (isset($_GET['o'])){
		$other = $_GET['o'];
	}
}

//articles
$dbrequest = "apb";
include('db_apb.php');
if ($page == "vocab"){
	$articles_query = mysql_query("SELECT * FROM vocab");
}
elseif ($page == "labs"){
	$articles_query = mysql_query("SELECT * FROM labs");
}
elseif ($page == "vids"){
	$articles_query = mysql_query("SELECT * FROM vide");
}
elseif (isset($bi)){
	$articles_query = mysql_query("SELECT * FROM bigidea");
}

//session and db
session_start();
if (!isset($_SESSION["apps_user"])) die('<h1>Error</h1>You must be logged in to continue...and you need a special link to login!');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Stephen's APBio ePortfolio</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script type="text/javascript" src="box.js"></script>
	<script type="text/javascript" src="sticky.js"></script>
	<script type="text/javascript" src="slideshow.js"></script>
	<meta charset=utf-8>
	<meta name="description" content="Stephen's AP Bio ePortfolio">
	<meta name="keywords" content="Vocab,Labs,Screencasts,Big Ideas">
	<meta name="author" content="CaliforniaClarks">
</head>
<body onload="slideshow();">
	<br>
	<div class="titlebar">Stephen's APBio ePortfolio</div>

	<div class="mainbar">
		<div class="navbar" id="navbar">
			<br>
			Navigation
			<br><br>
			<a href="?p=home">Home</a>
			<br>
			<a href="?p=vocab">Vocab</a>
			<br>
			<a href="?p=labs">Labs</a>
			<br>
			<a href="?p=vids">Screencasts</a>
			<br>
			<a href="?o=game">Game</a>
			<br><br>
			<a href="?bi=1">Big Idea 1</a>
			<br>
			<a href="?bi=2">Big Idea 2</a>
			<br>
			<a href="?bi=3">Big Idea 3</a>
			<br>
			<a href="?bi=4">Big Idea 4</a>
			<br><br>
			<a href='#' onclick='loginbox()'>Licence</a>
			<br><br>
		</div>
		<div class="contentbar">
			<?php
				if ($page == "home"){
					include('home.php');
				}
				elseif (isset($bi)){
					include('bigidea.php');
				}
				elseif (isset($other)){
                                        include('other.php');
                                }
				elseif ($page == "vocab"){
					include('vocab.php');
				}
				elseif ($page == "labs"){
					include('labs.php');
				}
				elseif ($page == "vids"){
					include('vids.php');
				}
			?>
		</div>
	</div>
	<div class="box" id="loginbox">
		<div class="simpletable">
			<a href="#" class="xbtn" onclick='loginbox()'></a>
			All work under this domain is original and property of CaliforniaClarks. This work is licenced under the Creative Commons licence <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">CC BY-NC-ND 4.0</a>.
			<br><br>
			<a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank"><img alt="Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License" src="http://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a>
		</div>
	</div>
</body>
</html>
