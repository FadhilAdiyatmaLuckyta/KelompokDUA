<?php
require_once __DIR__ . '/vendor1/autoload.php';
require 'config.php';

$status='sudah';
$payment = query("SELECT * FROM payment WHERE status_bayar='$status' ");

$html= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAPORAN DAFTAR PESANAN LANSA TRANS </title>

</head>
<body>
    <h1> LAPORAN DAFTAR TRANSAKSI LANSA TRANS </h1>
    <table border="1" cellpadding="4" cellspacing="0">

    <tr>
        <th>ID Pembayaran</th>
        <th>Kode Pembayaran</th>
        <th>ID Pesanan</th>
        <th>Tanggal Pembayaran</th>

    </tr>  '; 
    $i = 1;
        foreach( $payment as $row) {
            $html .= '<tr>
                
                <td>'. $row["id_payment"].'</td>
                <td>'. $row["kode_payment"].'</td>
                <td>'. $row["id_pesanan"].'</td>
                <td>'. $row["tgl_payment"].'</td>
            </tr>';
        }

       $html .='</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>