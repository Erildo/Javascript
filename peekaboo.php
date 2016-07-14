<!DOCTYPE html>
<html>
<head>
<style>
div#peekaboo{
    position:fixed;
    bottom:0px;
    right:-352px;
    background: #C4E6FF;
    padding:25px;
    width:300px;
    height:200px;
    font-size:48px;
}
</style>
<script>
function yScrollHandler(){
    var win = document.getElementById("peekaboo");
    if((window.pageYOffset + window.innerHeight) >= document.body.offsetHeight){
	//win.style.webkitTransition = "right 0.7s ease-in-out 0s";
	win.style.transition = "right 0.7s ease-in-out 0s";
	win.style.right = "0px";
    } else {
	win.style.transition = "right 0.7s ease-in-out 0s";
	win.style.right = "-452px";
    }
}
window.onscroll = yScrollHandler;
</script>
</head>
<body>
  <h2>Scroll Bottom Y Handler Function</h2>
  <p style="height:1600px; font-size:18px;">
    Scroll to the bottom of the page to see a Peekaboo box effect &darr;
  </p>
  <div id="peekaboo">Peekaboo!</div>
</body>
</html>