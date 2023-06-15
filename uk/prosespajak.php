<!DOCTYPE html>
<html>
<head>
	<title>hasil pajak</title>
</head>
<body>
	<?php 
$gaji = $_POST['gaji'];
$potpajak = 0.025;
$hasilpajak =$gaji*$potpajak;
echo "Pajak Yang Harus Dibayar= $hasilpajak";



	 ?>

</body>
</html>