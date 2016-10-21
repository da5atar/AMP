<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "secretpassword";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<?php
	// 2. Perform database query
	// define your query as a separate variable like $query as it is useful for debugging. E.g you can echo it to the screen
	$query  = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC"; // Notice there is no ';' at the end as PHP can handle queries
	
	$result = mysqli_query($connection, $query); /* mysqli_query takes as args the connection to use, and the query. $result will catches the result and is called a resource, it as a special kind of object which is a collection of DB rows that we are going to access */
	
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
		
		<?php
			// 3. Use returned data (if any)
			while($row = mysqli_fetch_row($result)) {
				// output data from each row
				var_dump($row);
				echo "<hr />";
			}
			/* we are using the while loop here with the mysqli_fetch_row() func that is going to help us increment the DB pointer as PHP will not be able to do it. After last record mysqli_fetch_row($result) will not be able to assign anything (NULL) to $row which exits the loop. Notice here, we couldn't have used foreach as it would try to increment the pointer for the PHP loop, only this method works */ 
		?>
		<?php
		  // 4. Release returned data
		  mysqli_free_result($result);
		?>
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>