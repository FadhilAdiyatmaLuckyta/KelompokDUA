<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tambah Bukti Transaksi</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td><input type="text" name="telp"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a ><input type="button" value="Batal"></a>
	</form>
</body>
</html>
