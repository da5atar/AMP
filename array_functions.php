<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Array Functions</title>
	</head>
	<body>
		
		<?php $numbers = array(8,23,15,47,16,4); ?>
		
		Count: 			<?php echo count($numbers); ?><br />
		Max value: 		<?php echo max($numbers); 	?><br />
		Min value: 		<?php echo min($numbers); 	?><br />
		<br />
		<pre>
		Sort: <br /><?php sort($numbers);  print_r($numbers); ?><br /> <!-- sort func is destructive, meaning we didn't have to make a reassignment like "$numbers = sort($numbers);" It sorts in place -->
		Reverse sort: <br /><?php rsort($numbers); print_r($numbers); ?><br />
		</pre>
		<br />
		Implode: 		<?php echo $numbers_string = implode(" * ", $numbers); ?><br /> <!-- returns a string separated by "*" -->
		Explode: 		<?php print_r(explode(" * ", $numbers_string)); ?><br /> <!-- returns an array by looking at the separator. Useful for instance when working with comma separated lists -->
		<br />
		
		15 in array?: 	<?php echo in_array(15, $numbers); // returns T/F ?><br />
		19 in array?: 	<?php echo in_array(19, $numbers); // returns T/F ?><br />
		
		<!-- check out the different functions for working with arrays at http://php.net/manual/en/ref.array.php -->
	</body>
</html>
