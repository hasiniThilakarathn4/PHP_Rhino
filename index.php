<?php

$color = "red"; 

if ($color == "red") {
  echo "Color is red";
}


switch ($color) {
  case "red":
    echo "color is red!";
    break;
  case "blue":
    echo "color is blue!";
    break;
  case "green":
    echo "color is green!";
    break;
  default:
    echo "color is neither red, blue, nor green!";
}

$input = 0;

while($input <= 2) {
  $input++;
}

echo "The number is: $input ";

$newcolors = array("red", "green", "blue", "yellow");

foreach ($newcolors as $color) {
  echo "$color <br>";
}






