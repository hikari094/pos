<!DOCTYPE html>
<html>
<head>
	<title></title>
<script>
	function myFunction()
		{
			alert("Welcome ^-^");
		}
</script></head>
<body>
<?php

	echo form_open('auth/login');

?>
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password" placeholder="password">
			<button type="submit" name="submit">Login</button>

			</form>
</body>
</html>
