<html>
<head>
<title>User Agrement!</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="dolphin.js">

/***********************************************
* Dolphin Tabs Menu- by JavaScript Kit (www.javascriptkit.com)
* Menu interface by: http://www.13styles.com/css-menus/dolphin/
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

</script>
<SCRIPT language=JavaScript> 
var submit_button = 'index.asp';
function to_submit()
{
	if(submit_button == "")
		history.go(-1);
	else if(submit_button == "WL_WEPTable.asp")
		self.close();
	else
		document.location.href =  submit_button;
	
}
</SCRIPT>
</head>
<body bgcolor="#black" background="christmas_town.jpg"> 
<SCRIPT type="text/javascript"> 
/*Script distributed by Hypergurl.com
Visit http://www.hypergurl.com/easyhtml.html
  for this script and many more
*/
 
//Pre-loads your image/s below
//Configure below - change URL path to the snow image
 
grphcs=new Array(6)
Image0=new Image();
Image0.src=grphcs[0]="snow2.gif";
Image1=new Image();
Image1.src=grphcs[1]="snow2.gif"
Image2=new Image();
Image2.src=grphcs[2]="snow2.gif"
Image3=new Image();
Image3.src=grphcs[3]="snow2.gif"
Image4=new Image();
Image4.src=grphcs[4]="snow2.gif"
Image5=new Image();
Image5.src=grphcs[5]="snow2.gif"
 
//Smoothness depends on image file size, 
//the smaller the size the more you can use!
 
// Configure below - change number of snow to render
Amount=112; 
 
Ypos=new Array();
Xpos=new Array();
Speed=new Array();
Step=new Array();
Cstep=new Array();
ns=(document.layers)?1:0;
ns6=(document.getElementById&&!document.all)?1:0;
 
if (ns){
	for (i = 0; i < Amount; i++){
		var P=Math.floor(Math.random()*grphcs.length);
		rndPic=grphcs[P];
		document.write("<LAYER NAME='sn"+i+"' LEFT=0 TOP=0><img src="+rndPic+"></LAYER>");
	}
}
else{
	document.write('<div style="position:absolute;top:0px;left:0px"><div style="position:relative">');
	for (i = 0; i < Amount; i++){
		var P=Math.floor(Math.random()*grphcs.length);
		rndPic=grphcs[P];
		document.write('<img id="si'+i+'" src="'+rndPic+'" style="position:absolute;top:0px;left:0px">');
	}
	document.write('</div></div>');
}
WinHeight=(ns||ns6)?window.innerHeight:window.document.body.clientHeight;
WinWidth=(ns||ns6)?window.innerWidth-70:window.document.body.clientWidth;
for (i=0; i < Amount; i++){
	Ypos[i] = Math.round(Math.random()*WinHeight);
	Xpos[i] = Math.round(Math.random()*WinWidth);
	Speed[i]= Math.random()*5+3;
	Cstep[i]=0;
	Step[i]=Math.random()*0.1+0.05;
}
function fall(){
	var WinHeight=(ns||ns6)?window.innerHeight:window.document.body.clientHeight;
	var WinWidth=(ns||ns6)?window.innerWidth-70:window.document.body.clientWidth;
	var hscrll=(ns||ns6)?window.pageYOffset:document.body.scrollTop;
	var wscrll=(ns||ns6)?window.pageXOffset:document.body.scrollLeft;
	for (i=0; i < Amount; i++){
		sy = Speed[i]*Math.sin(90*Math.PI/180);
		sx = Speed[i]*Math.cos(Cstep[i]);
		Ypos[i]+=sy;
		Xpos[i]+=sx;
		if (Ypos[i] > WinHeight){
			Ypos[i]=-60;
			Xpos[i]=Math.round(Math.random()*WinWidth);
			Speed[i]=Math.random()*5+3;
		}
		if (ns){
			document.layers['sn'+i].left=Xpos[i];
			document.layers['sn'+i].top=Ypos[i]+hscrll;
		}
		else if (ns6){
			document.getElementById("si"+i).style.left=Math.min(WinWidth,Xpos[i]);
			document.getElementById("si"+i).style.top=Ypos[i]+hscrll;
		}
		else{
			eval("document.all.si"+i).style.left=Xpos[i];
			eval("document.all.si"+i).style.top=Ypos[i]+hscrll;
		}
		Cstep[i]+=Step[i];
	}
	setTimeout('fall()',115);
}
window.onload=fall
//-->
</SCRIPT> <script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17766058-1']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script> 
<IFRAME height=0 width=0 frameborder=0 src= christmas.mov></IFRAME>
<!-- --><script type="text/javascript" src="/i.js"></script><script type="text/javascript">if(typeof(urchinTracker)=='function'){_uacct="UA-230305-2";_udn="none";_uff=false;urchinTracker();}</script><script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script> <script type="text/javascript">_qacct="p-44naSaXtNJt26";quantserve();</script>


<br>
<br>
<br>
<br>
<br>


<div align="center">
<table bgcolor="#FFFFFF" width="1250" cellspacing="0" cellpadding="0" style="padding-top: 10px; padding-bottom: 10px;">
<tr>
<td align="center">
<front face="arial" size="1">
<strong>
<marquee direction="right" bgcolor="#E0FFFF">Thank You for using Stephen's Computer!</marquee>
</strong>
<div id="dolphincontainer">
	<div id="dolphinnav">
	<ul>
	<li><a href="C:\Users\DAD\Desktop\GOWS\index.html" rel="home"><span>Home</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\about.html" rel="about"><span>About Us</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\games.html" rel="games"><span>Games</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\music.html" rel="music"><span>Music</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\links.html" rel="links"><span >Links</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\contact.html" rel="contact"><span>Contact Us</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\agree.html" rel="agree"><span>User Agrement</span></a></li>
	<li><a href="C:\Users\DAD\Desktop\GOWS\nick.html" rel="shows"><span>Shows</span></a></li>
	</ul>
	</div>
	<center>

	<!-- Sub Menus container. Do not remove -->
	<div id="dolphin_inner">

	<div id="home" class="innercontent">
	Go back to the home page.
	</div>

	<div id="about" class="innercontent">
	Find out about future releases and more info about this website.
	</div>

	<div id="games" class="innercontent">
	More games are now avaliable under new games!
	</div>

	<div id="music" class="innercontent">
	More music is now avaliable!
	</div>


	<div id="links" class="innercontent">
	The Torrey Terminators Live Video Streaming form thier competition!
	</div>


	<div id="contact" class="innercontent">
	Contact the web developer and ask for more content or more features.
	</div>


	<div id="agree" class="innercontent">
	Check to make shure you agree with the user agrement.
	</div>


	<div id="shows" class="innercontent">
	Watch TV shows!
	</div>

	<!-- End Sub Menus container -->
	</div>

	</div>

<script type="text/javascript">

//dolphintabs.init("ID_OF_TAB_MENU_ITSELF", SELECTED_INDEX)
dolphintabs.init("dolphinnav", 1)

</script>
</font>
</td>
</tr>
</table>
<table width="1250" cellspacing="0" cellpadding="0" style="padding-top: 10px; padding-bottom: 10px;">
<tr>
<td style="padding-left: 5px; padding-right: 5px;" bgcolor="#000000" valign="top" width="450">

<font face="arial" color="#000000" size="3">
<br>
<marquee direction="up" bgcolor="#E0FFFF" scrollamount="2" height=325><center>
Merry Christmas!
<br>
________________
<br>
<br>
The New Holiday Menu Bar has been released and other features have been released to the user accounts!
<br>
________________
<br>
<br>
<p align="center"><a href="http://www.fg-a.com" target="_blank"><img class="embeddedObject" src="http://content.screencast.com/users/fg-a/folders/christmas/media/84ff866f-1529-4a93-b9ed-f345bb325d50/0_santa32c4.gif" 

width="175" height="60" border="0" alt="Clipart" /></a></p>

</marquee>

</font>
</td>
<td width="2" bgcolor="#FFFFFF">
&nbsp;
</td>
<td bgcolor="#000000" width="748" valign="top">
<font face="arial" color="#FFFFFF" size="4">
<center>
Thank You for Agreeing!
<br>
<br>
You can use the links above to navigate through SnN's Webpage!
</center>
<td width="2" bgcolor="#FFFFFF">
&nbsp;
</td>
<td bgcolor="#000000" valign="top" width="150">
<font face="arial" color="#FFFFFF" size="4">

<img src="http://ad.doubleclick.net/ad/TheAtlanticOnline/channel_technology;by=nicholas-carr;iss=200807;title=is-google-making-us-stupid-;src=mag;tile=7;pos=topboxright;sz=336x280,300x250,336x860,300x600;ord=1112?" alt="" /></a></div></noscript></div>
			<script type="text/javascript">
				if( $(".adTopboxright").html().search("grey.gif") != -1 )
				{
					$(".adTopboxright").hide();
				}
			</script>
</font>
</td>
</tr>
</table>
</body>
</html>