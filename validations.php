<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>
		
		<?php
		
		// * presence: checking if a field is empty or set
		$value = "x";
		if (!isset($value) || empty($value)) {
			echo "Validation failed.<br />";
		}
		
		// * string length
		// minimum length
		$value = "abcd";
		$min = 3;
		if (strlen($value) < $min) {
			echo "Validation failed: Minimum length is 3.<br />";
		}
		// max length
		$max = 6;
		if (strlen($value) > $max) {
			echo "Validation failed: Maximum length is 6 .<br />";
		}
		
		// * type
		$value = "1"; // 1 is submitted as a string.
		if (!is_string($value)) {
			echo "Validation failed.<br />";
		}
		
		// * inclusion in a set
		$value = "1"; 
		$set = array("1", "2", "3", "4");
		if (!in_array($value, $set)) {
			echo "Validation failed.<br />";
		}

		// * uniqueness
		// uses a database to check uniqueness
		
		// * format
		// use a regex on a string
		// preg_match($regex, $subject) --> Applying a regex to see if something matches
		if (preg_match("/PHP/", "PHP is fun.")) {
			echo "A match was found.";
		} else {
		  echo "A match was not found.";
		}
		
		$value = "nobody@nowhere.com";
		// preg_match is most flexible
		if (!preg_match("/@/", $value)) {
			echo "Validation failed.<br />";
		}
		// strpos is faster than preg_match
		// use === to make exact match with false
		if (strpos($value, "@") === false) {
		  echo "Validation failed.<br />";
		}
		// use === to make exact match with false (Because string position will return position 0 if it finds it at the beginning of the string. And so we don't want to have == false because 0 would be considered false in that case. )
		?>

		<p>==============================</p>		
		<!-- PHP docs example on strpos() -->
		

		<?php
		$mystring = 'abc';
		$findme   = 'a';
		$pos = strpos($mystring, $findme);

		// Note our use of ===.  Simply == would not work as expected
		// because the position of 'a' was the 0th (first) character.
		if ($pos === false) {
		echo "The string '$findme' was not found in the string '$mystring'";
		} else {
		echo "The string '$findme' was found in the string '$mystring'";
		echo " and exists at position $pos";
		}
		?>

	</body>
</html>
