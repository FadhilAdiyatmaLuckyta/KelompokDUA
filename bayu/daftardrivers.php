<?php
require 'config.php';
$driver = query("SELECT * FROM drivers");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $driver  = carii ($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR DRIVERS</title>
</head>

<body>

<h1>DAFTAR DRIVERS</h1>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    

</form>
<br>
<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>ID Driver</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Nomer SIM</th>
        <th>Telepon</th>
        <th>Alamat</th>

    </tr>   
    <php $i = 1; ?>
    <?php foreach( $driver as $row ) : ?>
    <tr>
        
        <td>
            <a href="ubahdrivers.php?id_driver=<?= $row["id_driver"]; ?>"" onclick="return confirm('yakin nih mau ngubah ?');">Ubah</a>
            <a href="hapusdriver.php?id_driver=<?= $row["id_driver"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["id_driver"]; ?></td>
        <td><?= $row["nama_driver"]; ?></td>
        <td><?= $row["tempat_lahirdriver"]; ?></td>
        <td><?= $row["tanggal_lahirdriver"]; ?></td>
        <td><?= $row["jenis_kelamin"]; ?></td>
        <td><?= $row["no_sim"]; ?></td>
        <td><?= $row["telp"]; ?></td>
        <td><?= $row["alamat_driver"]; ?></td>
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>