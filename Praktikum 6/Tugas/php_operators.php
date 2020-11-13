<!-- Metha Khafifah Isty R : 18104015 -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP Operators</title>
</head>
<body>
<?php
	// operator aritmatika
	$x = 10;  
	$y = 6;

	echo $x % $y; // menghitung hasil bagi 10 dengan 6
	echo "<br>";

	// operator penugasan
	$x = 50;
	$x -= 30; // menggunakan operator pengurangan

	echo $x; // akan menampilkan hasil dari 50-30
	echo "<br>";

	//operator perbandingan
	$x = 100;  
	$y = "100";

	var_dump($x !== $y); // akan mengembalikan nilai true karena $x tidak sama dengan $y
	echo "<br>";

	//operator increment
	$x = 10;  
	echo ++$x; //mengitung 10 ditambah 1
	echo "<br>";

	//operator logika
	$x = 100;  
	$y = 50;

	//menggunakan operator AND
	if ($x == 100 && $y == 50) {
	    echo "Hello world!";
	}
	echo "<br>";
?> 
</body>
</html>