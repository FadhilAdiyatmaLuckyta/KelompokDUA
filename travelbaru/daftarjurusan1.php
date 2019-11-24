<?php
require 'config.php';
$jurusan = query("SELECT * FROM jurusan");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $jurusan = carijurusan ($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR JURUSAN</title>
</head>

<body>

<h1>DAFTAR JURUSAN</h1>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>

</form>
<br>
<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>id_jurusan</th>
        <th>id_driver</th>
        <th>id_car</th>
        <th>jurusan</th>
        <th>jam</th>
        <th>harga</th>
       
    </tr>   
    <php $i = 1; ?>
    <?php foreach( $jurusan as $row ) : ?>
    <tr>
        
        <td>
            <a href="ubahjurusan2.php?id_jurusan=<?= $row["id_jurusan"]; ?>"" onclick="return confirm('yakin nih mau ngubah ?');">Ubah</a>
            <a href="hapusjurusan1.php?id_jurusan=<?= $row["id_jurusan"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["id_jurusan"]; ?></td>
        <td><?= $row["id_driver"]; ?></td>
        <td><?= $row["id_car"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td><?= $row["jam"]; ?></td>
        <td><?= $row["harga"]; ?></td>
       
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>