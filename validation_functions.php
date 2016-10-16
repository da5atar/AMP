<?php

// * presence
// use trim() so empty spaces don't count
// use === to avoid false positives
// empty() would consider "0" to be empty
function has_presence($value) {
	return isset($value) && $value !== ""; //if it is set and the value is not equal to string, then it has presence (true).
}

// * string length
// max length
function has_max_length($value, $max) {
	return strlen($value) <= $max; // if the string length is less than or equal to the max then true	
}

// * inclusion in a set
function has_inclusion_in($value, $set) {
	return in_array($value, $set); // if it's in the array, it returns true.
}

function form_errors($errors=array()) {
	$output = "";
	if (!empty($errors)) {
	  $output .= "<div class=\"error\">";
	  $output .= "Please fix the following errors:";
	  $output .= "<ul>";
	  foreach ($errors as $key => $error) {
	    $output .= "<li>{$error}</li>";
	  }
	  $output .= "</ul>";
	  $output .= "</div>";
	}
	return $output;
}

?>