<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<!--<form action="site.php" method="post">
		<input type="text" name="gender">
		<input type="submit">
	</form>-->
	<?php 
		$myNumbers = array(4, 8, 14, 16, 23, 42);
		for ($i=0; $i < count($myNumbers); $i++){
			echo "$myNumbers[$i] <br>";	
		}	
	?>
</body>
</html>