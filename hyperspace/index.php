<?php
session_start();

if (isset($_SESSION['user'])){
	header("Location: /");
	exit;
}

  $bg = array('1.jpg', '2.jpg', '3.jpg');

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hyperspace Login</title>
<style>
html{
	/*background:url('backgrounds/<?php echo $selectedBg; ?>') no-repeat center center;*/
	min-height:100%;
	background-size:cover;
}
body {
	text-align:center;
	margin: auto;
	min-height:100%;
}
h1 {
	font-family: Optima, Segoe, "Segoe UI", Candara, Calibri, Arial, sans-serif;
	font-size: 40px;
	font-weight: 700;
	text-shadow: 0 1px 4px rgba(0,0,0,.2);
	color: #fff;
}
.textbox { 
	width: 305px;
	height: 42px;
	margin-top: 25px;
	padding-left: 15px;
	padding-right: 15px;
	background: rgba(45,45,45,.25);
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	border: 1px solid rgba(255,255,255,.15);
	-moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
	-webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
	box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
	color: #fff;
	-o-transition: all .2s;
	-moz-transition: all .2s;
	-webkit-transition: all .2s;
	-ms-transition: all .2s;
} 
.button { 
	width: 337px;
	height: 42px;
	margin-top: 25px;
	padding-left: 15px;
	padding-right: 15px;
	background: rgba(45,45,45,.5);
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	border: 1px solid rgba(255,255,255,.15);
	color: #fff;
} 
.textbox:focus { 
    outline: none; 
}
video#bgvid {
position: fixed;
top: 50%;
left: 50%;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -100;
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
background: url(ffc-space.jpg) no-repeat;
background-size: cover;
}
</style>
</head>
<body>
<video autoplay loop poster="polina.jpg" id="bgvid">
<source src="ffc-space.webmdhd.webm" type="video/webm">
<source src="ffc-space.mp4" type="video/mp4">
</video>
	<br><br><br>
	<h1>Hyperspace Login</h1>
	<form action="http://californiaclarks.com?do=login&ext=sites/hyperspace" method="post">
		<input class="textbox" name="username" type="text" placeholder="Username" autocomplete="off"> 
		<br>
		<input class="textbox" name="password" type="password" placeholder="Password" autocomplete="off"> 
		<br>
		<input type="submit" class="button" value="Sign me in">
	</form>
</body>
</html>
