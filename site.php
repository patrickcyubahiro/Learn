<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form action="site.php" method="get">
		<input type="number" name="firstNumber">
		<br>
		<input type="number" name="secondNumber">	
		<br>
		<input type="submit">   	
	</form>
	Answer: <?php echo $_GET["firstNumber"] + $_GET["secondNumber"]	?>
</body>
</html>