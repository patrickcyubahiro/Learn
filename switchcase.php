<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<form action="site.php" method="post">
		What is your grade?
		First Number: <input type="text" name="grade"><br>
		<input type="submit">
	</form>
	<?php 
		$grade = $_POST["grade"];
		switch ($grade) {
			case "A":
				echo "You did amazing!";
				break;
			case "B":
				echo "You did pretty good!";
				break;
			case "C":
				echo "You did poorly.";
				break;
			case "C":
				echo "You did very bad.";
				break;	
			case "D":
				echo "YOU FAIL!";
				break;	
			default:
				echo "Invalid Input.";
				break;
		}
	?>
</body>
</html>