<!-- Metha Khafifah Isty R : 18104015 -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Types</title>
</head>
<body>
<?php 
	$int = 3; //tipe data integer
	$string = "Color : "; //tipe data string
	$array = ['Red','White','Blue']; //deklarasi array
	$bool = true; //tipe data booean

	echo "Qty : ".$int; //menampilkan variabel int
	echo "<br>";
	echo $string.$array[2]; //menampilkan variabel string dan array
	echo "<br>";
	echo $bool; //menampilkan variabel bool

	echo "<br><br> Tipe datanya : <br>";
	var_dump($int); //menampilkan tipe data dari variabel int
	echo "<br>";
	var_dump($string); //menampilkan tipe data dari variabel string
	echo "<br>";
	var_dump($array); //menampilkan tipe data dari variabel array
	echo "<br>";
?>
</body>
</html>