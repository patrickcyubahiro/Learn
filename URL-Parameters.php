<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form action="site.php" method="get">
		Name: <input type="text" name="name"><input type="submit">
	</form>
	<br><br>
	<?php 
		echo $_GET["name"];	
	?>
</body>
</html>