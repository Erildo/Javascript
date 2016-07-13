<head>
<style type="text/css">
div#box1{
	
	background:#9DCEFF;
	width:400px;
	height:200px;
	
	
}
</style>
<script>
function change(el,color)
{
var elem= document.getElementById(el);
elem.style.transition="background 1.0s linear 0s";
elem.style.background=color;

}</script>

<button onclick="change('box1','#F0F');">Magenta</button>
<button onclick="change('box1','#0C0');">Green</button>

<div id="box1">Content in bx1..</div>
</body>
</html>
