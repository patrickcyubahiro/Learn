<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form action="site.php" method="post">
		Name: <input type="password" name="password"><input type="submit">
	</form>
	<br><br>
	<?php 
		echo $_POST["password"];	
	?>
</body>
</html>