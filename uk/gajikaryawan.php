<!DOCTYPE html>
<html>
<head>
  <title>Input - Gaji Karyawan</title>
</head>
<body>
<form method="post" action="hitung.php">
  <table>
    <tr>
      <td>NIP</td>
      <td><input type="text" name=nip id="nip"></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" id="nama"></td>
    </tr>
    <tr>
      <td>Golongan</td>
      <td>
        <select name="golongan" id="golongan">
          <option>Pilih</option>
            <option value="2000000">1A</option>
            <option value="2500000">2A</option>
            <option value="3000000">3A</option>
            <option value="4000000">4A</option>
            <option value="4500000">4B</option>
        </select></td>
    </tr>    
    <tr>
      <td><input type="submit" name="hitung" id="hitung" value="Hitung"></td>
    </tr>
  </table>
</form>
</body>
</html>