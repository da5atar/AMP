<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validations Empty</title>
	</head>
	<body>
		
		<!-- Example 1 -->
		<?php
		
		// * presence: checking if a field is empty or set
		// use trim() so empty spaces don't count
		// use === to avoid false positives
		// empty() would consider "0" to be empty
		
		$value = trim("0"); // triming all of the spaces out
		if (!isset($value) || (empty($value) && !is_numeric($value))) {
			echo "Validation failed.<br />";
		}
		else {echo "Validation passed!<br />";
		}
		?>
		
		<!-- Example 2 -->
		
		<?php
		
		// Another way to do it
		$value = trim("0");
		if (!isset($value) || $value === "") {
			echo "Validation failed.<br />";
		}
		else {echo "Validation passed!<br />";
		}
		?>
	</body>

</html>