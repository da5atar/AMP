<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Switch</title>
	</head>
	<body>
		<?php
			/* switch statements test a variable for equality against a list of values. 
			Each value is called a case , 
			and the variable being  switched on is checked for each case. */
			$a = 2;
			
			switch ($a) {
				case 0:
					echo "a equals 0<br />";
					break; /* The break statement terminates the switch
					and tranfer execution to the statement immediately following the 
					closing curly brace, other if the first case is matched, 
					the statements for the rest of the cases are executed as well */ 
				case 1:
					echo "a equals 1<br />";
					break;
				case 2:
					echo "a equals 2<br />";
					break;
				case 3:
					echo "a equals 3<br />";
					break;
				default:
					echo "a is not 0, 1, 2, or 3<br />";
					break;
			}
		
		?>
		
		<?php
		// ChineseZodiac
		// whitespace doesn't matter
		// colons, semicolons and breaks do
		$year = 1978;
		switch (($year - 4) % 12) {
			case  0: $zodiac = 'Rat'; 		break;
			case  1: $zodiac = 'Ox'; 		break;
			case  2: $zodiac = 'Tiger'; 	break;
			case  3: $zodiac = 'Rabbit'; 	break;
			case  4: $zodiac = 'Dragon'; 	break;
			case  5: $zodiac = 'Snake'; 	break;
			case  6: $zodiac = 'Horse'; 	break;
			case  7: $zodiac = 'Goat'; 		break;
			case  8: $zodiac = 'Monkey';    break;
			case  9: $zodiac = 'Rooster';   break;
			case 10: $zodiac = 'Dog'; 		break;
			case 11: $zodiac = 'Pig'; 		break;
		}
		echo "{$year} is the year of the {$zodiac}.<br />";
		?>
		
		<?php // case with multiple values

			$user_type = 'customer';
			
			switch ($user_type) {
				case 'student':
					echo "Welcome!";
					break;
				case 'press': // here the example of case with multiple values , the same statement (echo "Hello!";) is executed. 
				case 'customer':
				case 'admin':
					echo "Hello!";
					break;
			}
		?>
		
	</body>
</html>
