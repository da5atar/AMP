<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>urlencode</title>
	</head>
	<body>
		
		<?php
			$page = "William Shakespeare";
			$quote = "To be or not to be";
			$link1 =  "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
			// In the example below the file system is going to look for William+Shakespeare
			$link2 =  "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);

			echo $link1 . "<br />";
			echo $link2 . "<br />";
			
			// General rule is rawurlencode should be used for the path and urlencode for the query string.
		?>

	</body>
</html>
