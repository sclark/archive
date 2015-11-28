var slidenum = Math.floor((Math.random() * 3) + 1);
function slideshow(){
	document.getElementById("img").src = "images/"+slidenum+".png";
	slidenum++;
	if (slidenum > 3){
		slidenum = 1;
	}
	setTimeout(slideshow, 3250)
}
