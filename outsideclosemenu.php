<style type='text/css'>
div#box1{
	position:absolute;
	width:260 px;
	height:260 px;
	top:10px;
	left:15px;
	padding:20px;
	background:green;
	display:none;
}
</style>
<head>
<script>
window.addEventListener('mouseup', function(event){
	var box = document.getElementById('box1');
	if (event.target != box && event.target.parentNode != box){
        box.style.display = 'none';
    }
});
</script>
</head>
<body>
<div id="box1">
<h2>Pop Out</h2>
</div>
<button onclick="document.getElementById("box1").style.display='block'">POP OUT</button>
</body>
</html>