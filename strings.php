<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>Strings</title>
	</head>
	<body>
		<?php
		
		echo "Hello World <br />";
		echo 'Hello World! <br />';
		
		$greeting = "Helloooooooooo";
		$target = "World!!!!!";
		$phrase = $greeting . " " .$target;
		echo $phrase;
		?>
		<br />
		<?php
		
		echo "$phrase Again<br />"; //Note $phrase is still defined even though it was declared in a different PHP block
		echo '$phrase Again<br />'; //Note variable substitution didn't work with single quotes.
		echo "${phrase}Again<br />"; //{} differentiates clearly the non variables from the variable.
		?>
	</body>
</html>