<?php

// Array with names
$c[] = "Anna";
$c[] = "Brittany";
$c[] = "Cinderella";
$c[] = "Diana";
$c[] = "Eva";
$c[] = "Fiona";
$c[] = "Gunda";
$c[] = "Hege";
$c[] = "Inga";
$c[] = "Johanna";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($c as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
  $hint = $name;
      } else {
  $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>

