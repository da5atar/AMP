<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>False Positives</title>
	</head>
	<body>

		<?php

			function is_equal($value1, $value2) {
				$output = "{$value1} == {$value2}: ";
				if($value1 == $value2) {
					$output .= "true<br />";
				} else {
					$output .= "false<br />";
				}
				return $output;
			}
			
			echo "<u>Comment to reader</u>: Do not mind the colon as when the function goes to convert false to a string to display it, it comes back with no empty string.<br />";
			
			echo "=============== Separator =============== <br />";
			echo "<br />";
			
			echo is_equal(0, false); 
			echo is_equal(4, true);
			echo is_equal(0, null);
			echo is_equal(0, "0");
			echo is_equal(0, "");
			echo is_equal(0, "a");
			echo is_equal("1", "01");
			echo is_equal("", null);
			echo is_equal(3, "3 dogs");
			echo is_equal(100, "1e2");
			echo is_equal(100, 100.00);
			echo is_equal("abc", true);
			echo is_equal("123", "   123");
			echo is_equal("123", "+0123");
			echo "<br />";
			echo "Notice every single expression evaluated to true because PHP did type juggling: <br />";
			echo "- string vs null: converts null to \"\" so empty string vs null is equal (A,B,C vs null is not going to be equal). <br />";
			echo "- boolean vs other: converts other (any type) to boolean. <br />";
			echo "- number vs other: converts other to number.";
			echo "<br />";
		?>
		<br />
		<?php
			echo "=============== Separator ================<br />";
			echo "<br />";
			
			function is_exact($value1, $value2) {
				$output = "{$value1} === {$value2}: ";
				if($value1 === $value2) {
					$output .= "true<br />";
				} else {
					$output .= "false<br />";
				}
				return $output;
			}
			
			echo is_exact(0, false);
			echo is_exact(4, true);
			echo is_exact(0, null);
			echo is_exact(0, "0");
			echo is_exact(0, "");
			echo is_exact(0, "a");
			echo is_exact("1", "01");
			echo is_exact("", null);
			echo is_exact(3, "3 dogs");
			echo is_exact(100, "1e2");
			echo is_exact(100, 100.00);
			echo is_exact("abc", true);
			echo is_exact("123", "   123");
			echo is_exact("123", "+0123");
			echo "<br />";
			echo "The importance of using === is shown here: when we have to compare two types that may be different.";
		?>


	</body>
</html>
