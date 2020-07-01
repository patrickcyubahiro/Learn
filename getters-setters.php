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
		class Movie
			{
				private $title;
				private $rating;	
			}
		function __construct($title, $rating)
			{
				$this->title = $title;
				$this->ratting = $rating;	
			}
		function getRating()
			{
				return $this->rating;
			}
		function setRating($rating)
			{
				$this->rating = $rating;	
			}
		$avengers = new Movie("Avengers", "PG-13");
			$avengers->setRating("Dog");
		echo $avengers->getRating();
	?>
</body>
</html>