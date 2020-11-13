<!-- Metha Khafifah Isty R : 18104015  -->
<?php
$x = 5985;
var_dump(is_numeric($x)); //mengecek apakah $x merupakan integer atau bukan

$x = 5985.98;
var_dump(is_float($x)); //mengecek apakah $x merupakan float atau bukan

$x = "Hello";
var_dump(is_numeric($x)); //mengecek apakah $x merupakan integer atau bukan

echo "<br>";

$x = 1.9e411;
var_dump($x); //mengembaikan INF value

echo "<br>";
$x = 23465.768;
$int_cast = (int)$x; //mengkonversi float menjadi integer
echo $int_cast;


echo "<br>";
$x = acos(8); //mengembalikan NaN value
var_dump($x); 
?>