<!DOCTYPE html>
<html>
<head> 
	<title>PHP</title>
</head>
<body>
	<form action="site.php" method="post">
		<input type="text" name="student">
		<input type="submit">
	</form>
	<?php 
		$grades = array("Patrick" => "A+", "Pam" => "B-", "Oscar" => "c+");
/*		$grades["Patrick"] = "Pass";
		echo $grades["Patrick"];
		echo "<br>";
		echo count($grades);*/
		echo $grades[$_POST["student"]];
	?>
</body>
</html>