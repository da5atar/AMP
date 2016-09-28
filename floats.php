<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Floating Point Numbers</title>
	</head>
	<body>

		<?php echo $float = 3.14; ?><br />
		<?php echo $float + 7; ?><br />
		<?php echo 4/3; ?><br />

		<?php echo 4/0; ?><br /> <!-- Dividing by 0 gives a warning -->
		
		<br />
		Round: 		<?php echo round($float, 1); ?><br />
		Ceiling: 	<?php echo ceil($float); ?><br /> <!-- ceil func always round up -->
		Floor: 		<?php echo floor($float); ?><br /> <!-- floor func always round down -->
		<br />
		
		<?php $integer = 3; ?>
		
		<?php echo "Is {$integer} integer? " . is_int($integer); ?><br /> <!-- is_int checks whether a variable is an integer, returns a Boolean True and outputs as string 1 -->
		<?php echo "Is {$float} integer? " . is_integer($float); ?><br />
		<br />
		<?php echo "Is {$integer} float? " . is_float($integer); ?><br />
		<?php echo "Is {$float} float? " . is_float($float); ?><br />
		<br />
		<?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
		<?php echo "Is {$float} numeric? " . is_numeric($float); ?><br />
		<br />

	</body>
</html>
