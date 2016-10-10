<?php
  // This is how you redirect to a new page
  function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit; // exit is letting us exit the script after the redirect
  }
  
  $logged_in = $_GET['logged_in']; // Pass a query string like "?logged_in=1" to the url to test this.
  if ($logged_in == "1") {
    redirect_to("basic.html");
  } else {
    redirect_to("http://www.lynda.com");
  }
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Redirect</title>
  </head>
  <body>

  </body>
</html>
