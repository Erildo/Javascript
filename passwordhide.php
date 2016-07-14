<script>
function togglePassword() {
	var upass = document.getElementById('upass');
	var toggleBtn = document.getElementById('toggleBtn');
	if(upass.type == "password"){
		upass.type = "text";
		toggleBtn.value = "Hide Password Characters";
	} else {
		upass.type = "password";
		toggleBtn.value = "Show Password Characters";
	}
}
</script>
Password: <input id="upass" type="password" name="userpass">
<input id="toggleBtn" type="button" onclick="togglePassword()" value="Show Password Characters">