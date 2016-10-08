<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>First Page</title>
	</head>
	<body>
		
		<?php $link_name = "Second Page"; ?> 
		
		<!-- Now this variable receives some dynamic text i.e $link_name can be pulled from a DB or can eb avaluated according to a condition (if else etc.) --> 
		
		<?php $id = 5; ?> <!-- here sending dynamic data in the query string (what comes after the page name).
		
		<!-- Note: a link in PHP is just an HTML link -->
		
		<a href="second_page.php?id=<?php echo $id; ?>">
			<?php echo $link_name; ?> <!-- using PHP here to make the link more "dynamic" --> 
		</a> 
		
		<!-- make sure to use echo as we are outputting PHP into our HTML -->

	</body>
</html>
