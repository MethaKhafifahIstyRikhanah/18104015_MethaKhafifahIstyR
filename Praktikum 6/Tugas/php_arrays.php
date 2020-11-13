<!-- Metha Khafifah Isty R : 18104015 -->
<?php
// deklarasi array bernama cars
$cars = array("Panter", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

// menghitung jumlah array
echo "Qty : ".count($cars);

echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// menampilkan array menggunakan foreach
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>