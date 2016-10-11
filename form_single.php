<?php
	require_once("included_functions1.php");
	
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"]; // retrieving username:value and initializing $username.
		$password = $_POST["password"];

		if ($username == "mass" && $password == "secret") {
			// successful login
			redirect_to("basic.html");
		} else {
			$message = "There were some errors.";
		}
	} else {
		$username = ""; // default value if username:value wasn't posted.
		$message = "Please log in.";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>

		<?php echo $message; ?><br />
		
		<form action="form_single.php" method="post"> <!-- form submits to itself here -->
		  Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br /> <!-- If there are errors, value field will echo back the username to us in the condition that username was set when posted. htmlspecialchars() will also escape the invalid chars in user's submission --> 
		  Password: <input type="password" name="password" value="" /><br />
			<br />
		  <input type="submit" name="submit" value="Submit" />
		</form>

	</body>
</html>
