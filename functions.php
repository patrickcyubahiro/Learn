<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<!--<form action="site.php" method="post">
		<input type="text" name="student">
		<input type="submit">
	</form>-->
	<?php 
		function sayHi($name, $age){
			echo "Hello $name, you are $age <br>";
		}
		sayHi("Patrick Cyubahiro", 30);
		sayHi("Tom", 35);
		sayHi("Dave", 40);
	?>
</body>
</html>