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
        <th>ID Jurusan</th>
        <th>Jurusan</th>
        <th>ID Driver</th>
        <th>Mobil</th>
        <th>Plat Nomer</th>
        <th>Kursi</th>
        <th>Jam Keberangkatan</th>
        <th>Harga Tiket</th>
        <th>Foto Mobil</th>
        
               
    </tr>   
    <php $i = 1; ?>
    <?php foreach( $jurusan as $row ) : ?>
    <tr>
        
        <td>
            <a href="ubahjurusan2.php?id_jurusan=<?= $row["id_jurusan"]; ?>"" onclick="return confirm('yakin nih mau ngubah ?');">Ubah</a>
            <a href="hapusjurusan1.php?id_jurusan=<?= $row["id_jurusan"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["id_jurusan"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td><?= $row["id_driver"]; ?></td>
        <td><?= $row["mobil"]; ?></td>
        <td><?= $row["plat_nomor"]; ?></td>
        <td><?= $row["kursi"]; ?></td>
        <td><?= $row["jam_beranngkat"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><img src="img/<?=$row["gambar"];?>" width="100"></td>
        
       
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>