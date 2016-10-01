<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Comparison and Logical Operators</title>
	</head>
	<body>

		<?php
			$a = 4;
			$b = 3;
			$c = 1;
			$d = 20;
			if (($a >= $b) || ($c >= $d)) {
				echo "a is larger than b OR ";
				echo "c is larger than d";
			}
		?>
		<br />
		<?php
			$e = 100;
			if (!isset($e)) {
				$e = 200;
			}
			echo $e; 
			// This example is a good way to set default values
		?>
		<br />
		<?php
			// don't reject 0 or 0.0
			$quantity = ""; // Here you can assign 0 to quantity to test the evaluation of the expression
			if (empty($quantity) && !is_numeric($quantity)) {
				echo "You must enter a quantity.";
			}
		?>
		
		
	</body>
</html>
