<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULASAN KUE :3</title>
</head>
<body>
    <form action="tambah_kue_proses.php" method="POST">
        <table border="1">
            <tr>
                <td colspan="2" align="center">INPUT DATA ULASAN KUE</td>
</tr>
<tr>
    <td>Kode Kue</td>
    <td><input type="text" name="kode" placeholder="Masukkan Kode Kue" required></td>
</tr>
<tr>
    <td>Nama Kue</td>
    <td><input type="text" name="nama" placeholder="Masukkan Nama Kue" required></td>
</tr>
<tr>
    <td>Rating</td>
    <td><select name="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></td>
</tr>
<tr>
    <td>Catatan</td>
    <td><textarea name="catatan"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
        <input type="submit" name="simpan" value="simpan">
        <input type="reset" name="batal" value="batal"></td>
</tr>
</table>
</form>
</body>
</html>