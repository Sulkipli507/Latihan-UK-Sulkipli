<!DOCTYPE html>
<html>
<head>
	<title>proses hitung tanah</title>
</head>
<body>
	<h1>Hitung Tanah</h1>
	<?php 

	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$permeter = 200000;
	$hargatanah = $panjang*$lebar*$permeter;
	echo "Harga Tanah :$hargatanah";

	 ?>

</body>
</html>