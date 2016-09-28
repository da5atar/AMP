<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php
		$numbers = array(4,8,15,16,23,42);
		echo $numbers[1]; 
		?><br /> <!-- Arrays are numbered starting by 0 and not 1, this will return 8 -->
		
		<?php 
			$mixed = array(6, "fox", "dog", array("x", "y", "z"));
		?>
		<?php echo $mixed[2]; ?><br />
		<?php echo $mixed[3]; ?><br /> <!-- just to demontsrate that arrays to string conversion for outputting will return a warning -->
		<?php echo $mixed; ?><br /> <!-- same thing trying to return an array -->
		<br />
		<pre>
		<?php echo print_r($mixed); ?><br /> <!-- print-readable func, useful for dev and debugging only, to see what's inside the object -->
		</pre>
		
		<?php echo $mixed[3][1]; ?><br /> <!--This is how you would proceed to look at the nested array object -->
		<?php $mixed[2] = "cat"; ?> <!-- assign the item "cat" at position 2 --> 
		<?php $mixed[4] = "mouse"; ?> <!-- appends the array creating a fourth position and assigns the object "mouse" -->
		<?php $mixed[] = "horse"; ?> <!-- appends "horse" to the end whatever the last index is (if you don't know long is the array) -->
		
		<pre>
		<?php echo print_r($mixed); ?><br /> <!-- print-readable func, useful for dev and debugging only, to see what's inside the object -->
		</pre>
		
		<?php
			//PHP from version 5.4 added the short array syntax:
			$array = [1,2,3];
		<?
		
	</body>
</html>