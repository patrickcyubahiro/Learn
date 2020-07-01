<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<!--<form action="site.php" method="post">
		<input type="number" name="num1"><br>
		<input type="number" name="num2">
		<input type="submit">
	</form>-->
	<?php 
		function getMax($num1, $num2, $num3){
			if (($num1 > $num2) && ($num1 > $num3)) {
				return $num1;
			}
			elseif (($num2 > $num1) && ($num2 > $num3)) {
				return $num2;
			}
			elseif (($num3 > $num2 ) && ($num3 > $num1)) {
				return $num3;
			}
			else {
				echo " The entered numbers are equal.";
			}
		}
			echo getMax(200, 30, 400);
	?>
</body>
</html>