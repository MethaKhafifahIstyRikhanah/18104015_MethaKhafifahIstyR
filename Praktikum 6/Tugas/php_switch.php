<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!"; //akan ditampilkan jika value $favcolor = red
    break;
  case "blue":
    echo "Your favorite color is blue!"; //akan ditampilkan jika value $favcolor = blue
    break;
  case "green":
    echo "Your favorite color is green!"; //akan ditampilkan jika value $favcolor = green
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!"; //akan ditampilkan jika value $favcolor tidak memiliki value
}
?>