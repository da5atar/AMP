<?php //there should'nt be any space before this opening php tag
	  //remember headers are the very first thing sent.
	header("HTTP 1.1/ 404 Not Found");
	header("X-Powered-By: none of your business"); // remember headers are the very first thing sent.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Headers</title>
	</head>
	<body>

		<?php
			// This won't work... unless you have output
			// buffering turned on.
			// header("HTTP 1.1/ 404 Not Found");
		?>

		<pre>
			<?php
				print_r(headers_list()); // headers_list() returns a list of the headers.
			?>
		</pre>
	</body>
</html>
