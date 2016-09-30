<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Type Juggling and Type Casting</title>
	</head>
	<body>
		
		Type Juggling: <br />
		<?php $count = "2 cats"; ?>
		Type: <?php echo gettype($count); ?><br /> <!-- gettype() returns the type of a variable -->
		
		<?php $count += 3; ?>
		Type: <?php echo gettype($count); ?><br /> <!-- Here, PHP did type juggling -->

		<?php $cats = "I have " . $count . " cats."; ?>
		Cats: <?php echo gettype($cats); ?><br /> <!-- juggles back to a string -->
		<br />
		
		Type Casting: <br />
		<?php settype($count, "integer"); ?> <!-- notice that settype() changes/recasts the var in place -->
		count: <?php echo gettype($count); ?><br />
		
		<?php $count2 = (string) $count; ?> <!-- notice here the casting happens while the variable is being assigned -->
		count: <?php echo gettype($count); ?><br />
		count2: <?php echo gettype($count2); ?><br />
		<br />
		
		<?php $test1 = 3; ?>
		<?php $test2 = 3; ?>
		<?php settype($test1, "string"); ?>
		<?php (string) $test2; ?>
		test1: <?php echo gettype($test1); ?><br />
		test2: <?php echo gettype($test2); ?><br />
		
	</body>
</html>
