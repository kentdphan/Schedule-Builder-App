<?php

// Array with events
$a[] = "Spring Dance Showcase";
$a[] = "Chamber Orchestra";
$a[] = "Cappella group";
$a[] = "Hackaton";
$a[] = "Talent Show";
$a[] = "Basketball game";
$a[] = "Model UN";
$a[] = "SGA Elections";
$a[] = "Barbecue Night Out";
$a[] = "Graduation Ceremony";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $event) {
    if (stristr($q, substr($event, 0, $len))) {
      if ($hint === "") {
  $hint = $event;
      } else {
  $hint .= ", $event";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>