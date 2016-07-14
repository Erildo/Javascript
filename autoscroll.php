<!DOCTYPE html>
<html>
<head>
<style>
div.contentbox {
	background: #FFF;
	height: 500px;
	margin: 20px;
	font-size: 28px;
	border: #CCC 1px dashed;
}
</style>
<script src="autoScrollTo.js"></script>
</head>
<body>
<h2 id="myheading">JavaScript Smooth Animated Auto Scroll Tutorial</h2>
<a href="#" onclick="return false;" onmousedown="autoScrollTo('div1');">
  Document Section 1</a><br />
<a href="#" onclick="return false;" onmousedown="autoScrollTo('div2');">
  Document Section 2</a><br />
<a href="#" onclick="return false;" onmousedown="autoScrollTo('div3');">
  Document Section 3</a><br />
<a href="#" onclick="return false;" onmousedown="autoScrollTo('div4');">
  Document Section 4</a><br />
<div id="div1" class="contentbox">Div 1 content...</div>
<a href="#" onclick="return false;" onmousedown="resetScroller('myheading');">
  go back to top</a>
<div id="div2" class="contentbox">Div 2 content...</div>
<a href="#" onclick="return false;" onmousedown="resetScroller('myheading');">
  go back to top</a>
<div id="div3" class="contentbox">Div 3 content...</div>
<a href="#" onclick="return false;" onmousedown="resetScroller('myheading');">
  go back to top</a>
<div id="div4" class="contentbox">Div 4 content...</div>
<a href="#" onclick="return false;" onmousedown="resetScroller('myheading');">
  go back to top</a>
</body>
</html>

<script>var scrollY = 0;
var distance = 40;
var speed = 24;
function autoScrollTo(el) {
	var currentY = window.pageYOffset;
	var targetY = document.getElementById(el).offsetTop;
	var bodyHeight = document.body.offsetHeight;
	var yPos = currentY + window.innerHeight;
	var animator = setTimeout('autoScrollTo(\''+el+'\')',24);
	if(yPos > bodyHeight){
		clearTimeout(animator);
	} else {
		if(currentY < targetY-distance){
		    scrollY = currentY+distance;
		    window.scroll(0, scrollY);
	    } else {
		    clearTimeout(animator);
	    }
	}
}
function resetScroller(el){
	var currentY = window.pageYOffset;
    var targetY = document.getElementById(el).offsetTop;
	var animator = setTimeout('resetScroller(\''+el+'\')',speed);
	if(currentY > targetY){
		scrollY = currentY-distance;
		window.scroll(0, scrollY);
	} else {
		clearTimeout(animator);
	}
}
</script>