<?php
  // 1. Create a database connection before everything else, if there a problem then we can stop rendering the HTML page
  
  $dbhost = "localhost"; // could be a domain, an IP, URL etc...
  $dbuser = "widget_cms"; //user we connect to the DB with
  $dbpass = "secretpassword"; // user pwd
  $dbname = "widget_corp"; // DB name
  
  /* calling mySQL connect with above args and assigning to $connection (handle for the connection) used whenever we need to refer to this connection */
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  
  // Test if connection occurred.
  if(mysqli_connect_errno()) { // if there is an error number...
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    ); 
  } /* ... die() exits the PHP scripts displaying "Database connection failed" concatened with the error version returned as string by mysqli_connect_error and the error number. */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

	</body>
</html>

<?php
  // 5. Close database connection at the very last thing
  mysqli_close($connection);
?>