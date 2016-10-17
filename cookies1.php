<?php

// REMEMBER: Setting cookies must be before *any* HTML output
//           unless output buffering is turned on.
	$name = "test";
	$value = "123";
	$expire = time() + (60*60*24*7); // add seconds
	setcookie($name, $value, $expire); // values going out to the user

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>
		
		<?php 
		  print_r($_COOKIE);
		?>
		
		<p>=================================</p>
		
		<?php
		$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : ""; // using the ternary operator to prevent errors on page.
		echo $test;
		?>
		
	</body>
</html>
