<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Default Argument Values</title>
	</head>
	<body>

		<?php
		
			function paint($room="office", $color="beige") {
				return "The color of the {$room} is {$color}.<br />";
			}
		
			echo paint();
			echo paint("bedroom", "blue");
			echo paint("restroom", null); // Notice the default only takes place when nothing is passed in. In this case NULL is not 'nothing'. (Not sending something and sending nothing are not the same thing!!)
			echo ":)" . "<br />";
			echo paint("bedroom"); // Bedroom then
			echo paint("bedroom", "pink"); // Bedroom now
			echo paint("red"); // Notice order still matters 
			
			/* so any required values are going to be listed first and optional ones at the end. Argument order doesn't matter to the function operation, as long as they match the way it is called, however something like this: function paint($room="office", $color){...} is not allowed because $color would be required (mandatory)
			*/
		
		?>
	</body>
</html>
