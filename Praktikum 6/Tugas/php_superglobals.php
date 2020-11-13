<!-- Metha Khafifah Isty R : 18104015 -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP Post</title>
</head>
<body>
	<!-- menampilkan form input -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  Name: <input type="text" name="fname">
	  <input type="submit">
	</form>

	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $name = $_POST['fname']; // melakukan method post

	  // if kondisi untuk menampilkan inputan
	  if (empty($name)) {
	    echo "Name is empty";
	  } else {
	    echo "<br>Namakuu ".$name;
	  }
	}
	?>

	<!-- memanggil method GET -->
	<br>
	<p>Method GET</p>
	<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>