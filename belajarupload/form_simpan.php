<html>
<head>
<link href="css/style.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title>Upload Bukti</title>

<style>
	body {
  background-color: #F8F8FF;
}

div.data{
  margin: 80px;
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
<ul class="navbar-nav">
<li class="nav-item active">
   <a class="navbar-brand" href="#">Lansa Trans</a>
    </li>
</ul>
</nav>

<div class="data">
	<h1 style="font-family:Sitka Heading;">Tambah Bukti Transaksi</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td style="font-family:Berlin Sans FB;">Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td style="font-family:Berlin Sans FB;">Telepon</td>
		<td><input type="text" name="telp"></td>
	</tr>
	<tr>
		<td style="font-family:Berlin Sans FB;">Alamat</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td style="font-family:Berlin Sans FB;">Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn btn-success" value="Simpan">
	<!--<input type="submit" value="Simpan">-->
	<a href="#" class="btn btn-danger" role="button">Batal</a>
	<!--<a ><input type="button" value="Batal"></a>-->
	</form>
</div>

</body>
</html>
