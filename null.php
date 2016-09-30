<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>NULL</title>
	</head>
	<body>

		<?php
			$var1 = null;
			$var2 = "";
		?>
		is var1 null? <?php echo is_null($var1); ?><br />
		is var2 null? <?php echo is_null($var2); ?><br />
		is var3 null? <?php echo is_null($var3); ?><br />
		<br />
		var1 is set? <?php echo isset($var1); ?><br />
		var2 is set? <?php echo isset($var2); ?><br />
		var3 is set? <?php echo isset($var3); ?><br />
		<br />
		
		<?php // in PHP empty functions returns true for the following: "", null, 0, 0.0, "0", false, array() ?>
		
		<?php $var3 = "0"; ?>
		is var1 empty? <?php echo empty($var1); ?><br />
		is var2 empty? <?php echo empty($var2); ?><br />
		is var3 empty? <?php echo empty($var3); ?><br />
		<!-- Be careful with the empty functions as it can lead to bugs in your code, for example when you want to get back the value '0' in your forms -->
	</body>
</html>
