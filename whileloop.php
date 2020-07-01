<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<!--<form action="site.php" method="post">
		What is your grade?
		First Number: <input type="text" name="grade"><br>
		<input type="submit">
	</form>-->
	<?php 
		$index = 1;
		while ($index <= 5) {
			echo "$index <br>";
			$index++; //$index = $index + 1 ;
		}
	?>
</body>
</html>