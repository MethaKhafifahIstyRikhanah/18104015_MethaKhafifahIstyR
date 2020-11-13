<!-- Metha Khafifah Isty R : 18104015 -->
<?php
define("GREETING", "Welcome to W3Schools.com!", true); // membuat konstanta bernama greeting
echo greeting;

echo "<br>";
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]); //membuat konstanta araay bernama cars
echo cars[0];

echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");

 // fungsi untuk menampilkan konstansa
function myTest() {
  echo GREETING;
}
 
myTest();
?>