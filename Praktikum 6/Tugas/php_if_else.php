<?php
//if else 1 kondisi
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}

echo "<br>";
$t = date("H");
//if else 2 kondisi
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";
$t = date("H");
// if else multiple condition
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>