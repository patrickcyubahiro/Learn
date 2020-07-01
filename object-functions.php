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
		class Student{
			var $name, $major, $gpa;

			function __construct($name, $major, $gpa){
				$this->name = $name;
				$this->major = $major;
				$this->gpa = $gpa;
			} 
			function hasHonors(){
				if ($this->gpa >= 3.5) {
						return "true";
					}	
				return "false";	
			}
		}	
		$student1 = new Student("Patrick", "Computer Science", 3.8);
		$student2 = new Student("Cyubahiro", "BBIT", 3.5); 
		$student3 = new Student("Oscar", "Business", 3.3);

		echo $student1->hasHonors();
	?>
</body>
</html>