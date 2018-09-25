<form action="proses.php" method="post">
	Username : <input type="text" name="username[]">
	Password : <input type="password" name="password[]">
	<input type="submit" name="submit" value="Login">
</form>
<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
?>
