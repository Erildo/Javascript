<!DOCTYPE html>
<html>
<head>
<script>
window.onbeforeunload = function(){
	var ta = document.getElementById("user_post");
	if(ta.value != ""){
	    return "You have unsaved work!";
	}
}
</script>
</head>
<body>
<textarea id="user_post"></textarea>
</body>
</html>