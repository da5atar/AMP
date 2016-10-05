<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Multiple Returns</title>
	</head>
	<body>
		
		<?php

			function add_subt($val1, $val2) {
			  $add = $val1 + $val2;
			  $subt = $val1 - $val2;
			  return array($add, $subt); // Since arrays can hold more than one variable/value, we can use it to return $add and $subt
			}

			$result_array = add_subt(10,5);
			echo "Add: " . $result_array[0] . "<br />";
			echo "Subtract: " . $result_array[1] . "<br />";

			// A better way of doing is to use PHP list() which assign array values to variables:
			
			list($add_result, $subt_result) = add_subt(20,7);
			echo "Add: " . $add_result . "<br />";
			echo "Subtract: " . $subt_result . "<br />";
			
			/* It's like list() allowed us to 'unpack' the elements we packed with array[] above and assigned them to variables very easily. The combination of arrays and list is the best way to return multiple values from user-defined functions. */
			
		?>
		
	</body>
</html>
