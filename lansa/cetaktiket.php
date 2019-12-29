<?php
require 'config.php';

if (isset($_GET['id'])) {
	$id_pesanan = $_GET['id'];
}
?>
<!DOCTYPE html>
<html>
	<head>	 
		<title>TIKET LANSA TRANS</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">

  <style>

fieldset{
	border:1px solid #c5c5c5;
	border-top:8px solid #2eb1ff;
	border-bottom:8px solid #2eb1ff;
	padding: 10px;
	background:#f2f8fb;
}

table{
	font-family:arial;
	border-collapse:collapse;
	margin-bottom:20px;
}

table tr td:first-child{
	font-weight:700;
	margin-right: 100px;
	display:inline-block;
}

table tr td:last-child{
	font-weight:400;
	margin-right: 100px;
	font-style:italic;
}

table tr td{
	padding: 5px 10px;
}

.harga{
	font-size:24px;
	font-weight:700;
	font-family:arial;
	padding: 15px 20px;
	color: green;
	float:right;
}

.berangkat{
	font-family:arial;
	padding: 20px 10px;
	float:left;
}
</style>
	</head>
	<body>
	<a href="cetaktiket.php" target="_blank"> </a>


		<h3 align="center">TIKET</h3>


	<fieldset style="width: 800px; margin: auto;">
		<?php if (isset($_GET['id'])) { ?>
		<form action="" method="post" >
			<table>
				<tr>
					<td>Kode Booking</td>
					<td><strong><?= getPesanan($_GET['id'])['kode_booking'] ?><strong></td>
				</tr>
				<tr>
					<td>Nama Penumpang</td>
					<td><?= getUser(getPesanan($_GET['id'])['id_user'])['nama']?></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><?= getJurusan(getPesanan($_GET['id'])['id_jurusan'])['jurusan']?></td>
				</tr>
				<tr>
					<td>Tanggal Pesan</td>
					<td><?= getPesanan($_GET['id'])['tgl_pesan'] ?></td>
				</tr>
				<tr>
					<td>Jemput</td>
					<td><?= getPesanan($_GET['id'])['jemput'] ?></td>
				</tr>
				<tr>
					<td>Nomor Kursi</td>
					<td><?= getKursi(getPesanan($_GET['id'])['id_kursi'])['no_kursi']?></td>
				</tr>
			</table>
			<em class="berangkat">
				berangkat pada <?= getPesanan($_GET['id'])['tgl_berangkat'] ?>
			</em>
			<em class="harga">
				Rp<?= number_format(getPesanan($_GET['id'])['harga']) ?>
			</em> 
			<script>
				window.print();
			</script>
		</form>
		<?php } ?>
	</fieldset>
	</body>
</html>
