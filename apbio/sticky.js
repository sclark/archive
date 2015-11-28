var stickyOffset = -1;

window.onscroll = function() {
		if (stickyOffset == -1) stickyOffset = document.getElementById("navbar").offsetTop - 19;

	    if (window.pageYOffset > stickyOffset) document.getElementById("navbar").style.top =(window.pageYOffset)+"px";
	    else document.getElementById("navbar").style.top =(stickyOffset)+"px"
};