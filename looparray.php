<title>Loop Array</title>
<!DOCTYPE html>
<html>
<head>
<style>
#wss{
	opacity:0;
	-webkit-transition:opacity 1.0s linear 0s;
	transition:opacity 1.0s linear 0s;
}
</style>
<script>
var wss_i = 0;
var wss_array = ["Cute","Happy","<u>Playful</u>","Smart","Loyal"];
var wss_elem;
function wssNext(){
	wss_i++;
	wss_elem.style.opacity = 0;
	if(wss_i > (wss_array.length - 1)){
		wss_i = 0;
	}
	setTimeout('wssSlide()',1000);
}
function wssSlide(){
	wss_elem.innerHTML = wss_array[wss_i];
	wss_elem.style.opacity = 1;
	setTimeout('wssNext()',2000);
}
</script>
</head>
<body>
<h1>My dog is <span id="wss"></span></h1>
<script>wss_elem = document.getElementById("wss"); wssSlide(); </script>
</body>
</html>