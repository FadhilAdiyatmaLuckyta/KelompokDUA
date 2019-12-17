<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'config.php';
$pesanan = query("SELECT * FROM pesanan");

$html= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAPORAN DAFTAR PESANAN LANSA TRANS </title>

</head>
<body>
    <h1> LAPORAN DAFTAR PESANAN LANSA TRANS </h1>
    <table border="1" cellpadding="4" cellspacing="0">

        <tr>
            <th>Aksi</th>
            <th>ID Pesanan</th>
            <th>Kode Booking</th>
            <th>ID Jurusan</th>
            <th>ID User</th>
            <th>Tanggal Berangkat</th>
            <th>Tempat Jemput</th>
            <th>Tanggal Pesan</th>
            <th>ID Kursi</th>
            <th>Harga</th>

        </tr>   
    </table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>