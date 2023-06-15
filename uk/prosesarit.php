<!DOCTYPE html>
<html>
<head>
	<title>ini</title>
</head>
<body>
	<form name="form1" method="POST"></form>
	<input type="text" name="angka1">-
	<input type="text" name="angka2">
	<?php 
	$jumlah = $_POST["angka1"] - $_POST["angka2"];
	echo "<input type = text name = kurang  value= '$jumlah'>";
	 ?>

</body>
</html>