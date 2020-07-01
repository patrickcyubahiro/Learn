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
		$isMale = true;
		$isTall = false;
		if ($isMale && $isTall){
			echo "You are a tall male.";
		}
		/*else if ($isMale || $isTall){
			echo "You are either male or tall.";
		}*/
		else if ($isMale && !$isTall){
			echo "You are male but not tall.";
		}
		else {
			echo "You are not male and not tall.";
		}
	?>
</body>
</html>