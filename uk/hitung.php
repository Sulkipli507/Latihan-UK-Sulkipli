<!DOCTYPE html>
<html>
<head>
  <title>Hasil - Gaji Karyawan</title>
</head>
<body>
<?php
 
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$tunjangan = $golongan*0.025;
$gajih_bersih = $golongan+$tunjangan;
 
echo "NIP: $nip <br>";
echo "Nama: $nama <br>";
echo "Gajih bersih: $gajih_bersih";
 
?>
</body>
</html>