<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Continue</title>
	</head>
	<body>

		<?php
			for ($count=0; $count <= 10; $count++) {
				if ($count % 2 == 0) { continue; }
				echo $count . ", ";
			}
		?>
		<br />
		<p>===============================</p>
		<?php // what's wrong with this?

			$count = 0;
			while ($count <= 10) {
				if ($count == 5) {
					$count++; // Comment out this line to find out :)
					continue;
				}
				echo $count . ", ";
				$count++;
			}

		?>
		<br />
		<p>===============================</p>
		<?php // Example on how to work with 'continue' with a loop inside a loop

			for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { continue(2); } // by default continue() has an argument of 1 (1 loop back) so this line tells to continue 2 loops back.
			  	echo $i . "-" . $k . "<br />";
				}
			}

		?>
		

	</body>
</html>
