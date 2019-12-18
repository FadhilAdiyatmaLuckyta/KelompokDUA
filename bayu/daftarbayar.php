<?php
require 'config.php';
?>
<?php
session_start();
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
        header("location:login2.php?belom_login");
}

$payment = query("SELECT * FROM payment");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $payment  = carii ($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR PEMBAYARAN</title>
</head>

<body>

<h1>DAFTAR PEMBAYARAN</h1>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    

</form>
<br>
<table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>Aksi</th>
        <th>ID Pembayaran</th>
        <th>Kode Pembayaran</th>
        <th>ID Pesanan</th>
        <th>Tanggal Pembayaran</th>
        <th>Status Pembayaran</th>
        <th>Bukti Pembayaran</th>
       

    </tr>   
    <php $i = 1; ?>
    <?php foreach( $payment as $row ) : ?>
    <tr>
        
        <td>
            <a href="ubahstatus.php?id_payment=<?= $row["id_payment"]; ?>"" onclick="return confirm('yakin nih mau ngubah ?');">Ubah</a>
            <a href="hapusdriver.php?id_driver=<?= $row["id_driver"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');">Hapus</a>
        </td>
        <td><?= $row["id_payment"]; ?></td>
        <td><?= $row["kode_payment"]; ?></td>
        <td><?= $row["id_pesanan"]; ?></td>
        <td><?= $row["tgl_payment"]; ?></td>
        <td><?= $row["status_bayar"]; ?></td>
        <td><img src="img/<?=$row["bukti"];?>" width="100"></td>
        
    </tr>
    <php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>