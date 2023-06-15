<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<h2>Menginput Data</h2>
<form method="POST" action="proses.php">
	<table>
		<tr>
			<td><label>Nama Depan:</label></td>
			<td><input type="text" name="namadepan"></td>
		</tr>
		<tr>
			<td><label>Nama Belakang:</label></td>
			<td><input type="text" name="namabelakang"></td>
		</tr>
		<tr><td><label>Tinggi:</label></td>
			<td><input type="text" name="tinggi"></td>
		</tr>
		<tr>
			<td><label>Berat Badan:</label></td>
			<td><input type="text" name="bb"></td>
		</tr>
		<tr>
			<td><label>Umur:</label></td>
			<td><input type="text" name="umur"></td>
		</tr>
		<tr>
			<td><label>Status Pernikahan:</label></td>
			<td><input type="text" name="status"></td>
		</tr>
		<tr>
			<td><button type="submit" class="btn btn-success">Simpan</button></td>
			<td><button type="reset" class="btn btn-success">Batal</button></td>
		</tr>
	</table>
</form>
</body>
</html>