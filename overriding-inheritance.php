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
		class Chef{
			function makeChicken()
		{
				echo "The chef makes chicken <br>";
			}
			function makeSalad(){
				echo "The chef makes salad <br>";
			}
			function makeSpecialDish(){
				echo "The chef makes bbp ribs <br>";
			}
		}	
			class ItalianChef extends Chef{
				function makePasta(){
					echo "The chef  makes pasta";
				}
			function makeSpecialDish(){
				echo "The chef makes chicken parm";
			}		
			}
		$chef = new Chef();
		$chef->makeSpecialDish();

		$ItalianChef = new ItalianChef();
		$ItalianChef->makeSpecialDish();
	?>
</body>
</html>