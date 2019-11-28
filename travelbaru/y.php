<?php
require 'config.php';
$contact = query("SELECT * FROM contact_us");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $contact  = cariik ($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>

<body>

<h1>CONTACT US</h1>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    

</form>
<br>
<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>Kode</th>
        <th>Pengirim</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Kritik dan Saran</th>
        <th>Tanggal</th>
        

    </tr>   
    <php $i = 1; ?>
    <?php foreach( $contact as $row ) : ?>
    <tr>
        
        <td>
            
            <a href="hapussaran.php?kode=<?= $row["kode"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["kode"]; ?></td>
        <td><?= $row["pengirim"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["no_telp"]; ?></td>
        <td><?= $row["pesan"]; ?></td>
        <td><?= $row["tgl_contact"]; ?></td>
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>