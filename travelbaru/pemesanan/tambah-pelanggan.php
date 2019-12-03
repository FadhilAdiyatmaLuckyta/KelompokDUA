<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
	$nama   = $_POST['nama'];
	$tgl	= $_POST['tgl'];
	$kursi 	= $_POST['kursi'];

	$query3 = mysqli_query($config,"SELECT * FROM transaksi WHERE no_kursi = '$kursi' AND tgl_pesan = '$tgl'");
	$count = mysqli_num_rows($query3);
		if($count > 0 ){
			echo '<script>alert("Kursi Telah dipakai");</script>';
		}else{
			$query4=mysqli_query($config,"INSERT INTO transaksi VALUES ('','$nama','$kursi','$tgl')");
			echo '<script>alert("Pemesanan Berhasil");</script>';
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesan Kereta</title>
</head>
<body>
	<form action="" method="POST">
		<select id="kursi" name="kursi">
			<option value='' selected>- Pilih -</option>
				<?php
				$kursi = mysqli_query($config,"SELECT * FROM kursi_kereta");
					while ($row = mysqli_fetch_array($kursi)) {
						echo "<option value='$row[no_kursi]'>$row[nm_kursi]</option>";
					}?>
		</select>
		<input type="text" name="nama">
		<input type="date" name="tgl">
		<input type="submit" name="submit">
	</form>

</body>
</html>