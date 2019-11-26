<?php
require 'config.php';
$car = query("SELECT * FROM cars");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $car = cary ($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR CARS</title>
</head>

<body>

<h1>DAFTAR CARS</h1>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>

</form>
<br>
<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>ID Cars</th>
        <th>Merk</th>
        <th>Warna</th>
        <th>Plat Nomor</th>
        <th>Jumlah Kursi</th>
        <th>Foto</th>
        
    </tr>   
    <php $i = 1; ?>
    <?php foreach( $car as $row ) : ?>
    <tr>
        
        <td>
            <a href="ubahmobil.php?id_car=<?= $row["id_car"]; ?>"" onclick="return confirm('yakin nih mau ngubah ?');">Ubah</a>
            <a href="hapusmobil.php?id_car=<?= $row["id_car"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["id_car"]; ?></td>
        <td><?= $row["merk"]; ?></td>
        <td><?= $row["warna"]; ?></td>
        <td><?= $row["nopol"]; ?></td>
        <td><?= $row["kursi"]; ?></td>
        <td><img src="img/<?=$row["gambar"];?>" width="100"></td>
        
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>