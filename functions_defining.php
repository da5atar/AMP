<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Defining</title>
	</head>
	<body>
		<?php
		
			function say_hello() {
				echo "Hello World!<br />";
			}
			
			say_hello(); //Call to the function - Parenthesis are needed to call the function!
			
			function say_hello_to($word) {
				echo "Hello {$word}!<br />"; // function args are accessible inside the function. 
			}
			
			say_hello_to("World");
			say_hello_to("Everyone"); // Arguments (Parameters) allow for reusing the same function based on what arguments we pass in.
			
			say_hello_loudly();
			
			function say_hello_loudly () {
				echo "HELLO WORLD!<br />";
			}  	
			/* Notice here above, we called the function before defining it sequentially and it worked! Since PHP4 and 5 actually pre-process the code in the page to find all the functions first. It is good programming practice to define functions before calling them though, for readibility. */

			// This code below will produce an error as function cannot be redeclared.	
			
			//function say_hello_loudly () {
			//	echo "We can't redefine a function.<br />"; 
			//} 		
			
		?>
	</body>
</html>
