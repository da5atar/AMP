<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Associative Arrays</title>
	</head>
	<body>
		
		<?php $assoc = array("first_name" => "Massamba", "last_name" => "Sow"); ?>
		<?php echo $assoc["first_name"]; ?><br />
		<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

		<?php $assoc["first_name"] = "Front-End Ninja"; ?>
		<?php $assoc["last_name"] = "to Full-Stack Samurai"; ?>
		<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

		<?php // echo $assoc[0]; ?><br /> <!-- numbered index will not work, unless you used them as keys -->
		<!-- See below that arrays and assoc_arrays are built the same way in PHP --> 
		<?php $numbers = array(4,8,15,16,23,42); ?>
		<?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 47); ?>
		<?php echo $numbers[5]; ?>
		
	</body>
</html>
