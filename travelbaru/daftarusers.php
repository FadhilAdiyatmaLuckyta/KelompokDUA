<?php
require 'config.php';
$users = query("SELECT * FROM users");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $users = cari ($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR USERS</title>
</head>

<body>

<h1>DAFTAR USERS</h1>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>

</form>
<br>
<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>ID User</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Nomer ID</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
    </tr>   
    <php $i = 1; ?>
    <?php foreach( $users as $row ) : ?>
    <tr>
        
        <td>
            <a href="ubah.php?id_user=<?= $row["id_user"]; ?>"" onclick="return confirm('yakin nih mau ngubah ?');">Ubah</a>
            <a href="hapus.php?id_user=<?= $row["id_user"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["id_user"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["tempat_lahir"]; ?></td>
        <td><?= $row["tanggal_lahir"]; ?></td>
        <td><?= $row["jekel"]; ?></td>
        <td><?= $row["nomer_id"]; ?></td>
        <td><?= $row["telepon"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["username"]; ?></td>
        <td><?= $row["password"]; ?></td>
        <td><?= $row["level"]; ?></td>
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>