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
		function cube($num){
			return $num * $num * $num;
		}
		$cubeResult = cube(4);
		echo $cubeResult;
	?>
</body>
</html>