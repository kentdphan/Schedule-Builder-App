<?php
$b[] = "Performing Arts and Humanities Building";
$b[] = "The Commons";
$b[] = "UC Ballroom";
$b[] = "Retriever Activities Center (RAC)";
$b[] = "AOK Library";
$b[] = "Engineering Building";
$b[] = "Fine Arts Building";
$b[] = "University Center";
$b[] = "Information Technology/Engineering Building";

// Array with events

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint2 = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($b as $location) {
    if (stristr($q, substr($location, 0, $len))) {
      if ($hint2 === "") {
  $hint2 = $location;
      } else {
  $hint2 .= ", $location";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint2 === "" ? "no suggestion" : $hint2;
?>

