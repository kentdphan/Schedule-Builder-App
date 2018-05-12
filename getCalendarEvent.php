<?php
  // getCityState.php
  // Gets the form value from the "zip" widget, looks up the
  // city and state for that zip code, and prints it for the
  // form

  // array that holds some city and state values
$calendarEvents = array(
			"Red"=> "Spring Dance Showcase, Night, Baltimore",
			"Orange"=> "Chamber Orchestra, Night, Performing Arts and Humanities Building",
			"Yellow"=> "Cappella group, Noon, Baltimore",
			"Green"=> "Barbecue Night Out, Noon, The Commons",
			"Blue"=> "Basketball game, Night, Baltimore",
			);

// retrieve value of get parameter
$color = $_GET["color"];

// check if zip value exists in array above, and retrieve the city, state values corresponding to the matching zip value
if(array_key_exists($color, $calendarEvents))
  print $calendarEvents[$color];
  else
    // if doesn't exist, just give an error message
    print "no matching entry, no matching entry, no matching entry";
?>