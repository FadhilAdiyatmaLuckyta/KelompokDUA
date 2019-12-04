<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
	$kursi = $_POST['kursi'];
	$query = mysqli_query($config,"INSERT INTO kursi_kereta VALUES ('','$kursi')");
	echo '<script>alert("Data berhasil ditambahkan ! ");window.location.href="tambah_kursi.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kursi</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="kursi">
		<input type="submit" name="submit">
	</form>
</body>
</html>