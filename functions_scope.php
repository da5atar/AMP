<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Scope</title>
	</head>
	<body>
		
		<?php
		    // 1st example 
			
			/* $bar = "outside";
			
			function foo() {
				$bar = "inside"; 
			}
			echo "1: ". $bar . "<br />";
			foo(); // Trying to set the value of $bar...
			echo "2: ". $bar . "<br />"; */
			
			echo "================== Separator ========================" . "<br />"; // comment out the above and uncomment below the separator to run the second example and vice versa because of function declaration.
			
			// 2nd example: 
			
			$bar = "outside";   // global scope
			
			function foo() {
				global $bar;
				if (isset($bar)) {
					echo "foo: " . $bar . "<br />";
				}
				$bar = "inside";  // local scope
			}
		
			echo "1: " . $bar . "<br />";
			foo();
			echo "2: " . $bar . "<br />";
			
		
		?>
		
	</body>
</html>
