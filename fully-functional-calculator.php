<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<form action="site.php" method="post">
		First Number: <input type="number" step="0.1001" name="firstNumber"><br>
		Operator: <input type="text" name="operator"><br>
		Sencond Number: <input type="number" step="0.1001" name="secondNumber"><br>
		<input type="submit">
	</form>
	<?php 
		$firstNumber = $_POST["firstNumber"];
		$secondNumber = $_POST["secondNumber"];
		$operator = $_POST["operator"];
		

		if($operator == "+"){
			echo $firstNumber + $secondNu=ber;
		}
		elseif ($operator == "-") {
			echo $firstNumber - $secondNumber;
		}
		elseif($operator == "*"){
			echo $firstNumber * $secondNumber;
		}
		elseif ($operator == "/") {
			echo $firstNumber / $secondNumber;
		}
		else{
			echo "invalid operator or number.";
		}
	?>
</body>
</html>