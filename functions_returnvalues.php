<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Return Values</title>
	</head>
	<body>

		<?php

		  function add($val1, $val2) {
		    $sum = $val1 + $val2; // $sum is only defined inside the function. We cannot echo it outside the function for instance if we don't return its value:
				return $sum;
		  }
		
			$result1 = add(3,4); // $result1 catches the value of $sum
			$result2 = add(5,$result1); // Now we can keep working with it with $result1
			echo $result2;
			
		   // Note that best practice is to always have a function return something even if it's NULL.
		   
		   // Just like break, return statement exits the function immediatly. See chinese_zodiac() below.
		   
		?>
		<br />
		<?php // Chinese Zodiac as a function

			function chinese_zodiac($year) {
			  switch (($year - 4) % 12) {
			    case  0: return 'Rat';
			    case  1: return 'Ox';
			    case  2: return 'Tiger';
			    case  3: return 'Rabbit';
			    case  4: return 'Dragon';
			    case  5: return 'Snake';
			    case  6: return 'Horse';
			    case  7: return 'Goat';
			    case  8: return 'Monkey';
			    case  9: return 'Rooster';
			    case 10: return 'Dog';
			    case 11: return 'Pig';
			  }
			}
			
			$zodiac = chinese_zodiac(2013);
			echo "2013 is the year of the {$zodiac}.<br />";

			echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />"; // Concatening the echo with the function.
			
			
		// A good practice is not to output directly from inside the function. See example below:

		?>
		<br />
		
		<?php
		
			function better_hello($greeting, $target, $punct) {
				return $greeting . " " . $target . $punct . "<br />";
			}
		
			echo better_hello("Hello", "John Doe", "!");
		
		?>
		

	</body>
</html>
