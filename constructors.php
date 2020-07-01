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
		class Book
		{
			var $title;
			var $author;
			var $pages;

			function __construct($aTitle, $aAuthor, $aPages){
				$this->title = $aTitle;
				$this->author = $aAuthor;
				$this->pages = $aPages;
			}
		}
			$book1 = new Book("Harry Potter","Patric Cyubahiro", 400);
			/*$book1->title = "Harry Potter";
			$book1->author = "Patrick Cyubahiro";
			$book1->pages = 400;*/
			echo "$book1->author <br>";	

			$book2 = new Book("The road less travelled","Cyubahiro", 200);
			/*$book2->title = "The road less travelled";
			$book2->author = "Cyubahiro";
			$book2->pages = 200;*/
			echo "$book2->author <br>";	
	?>
</body>
</html>