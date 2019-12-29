<?php
require 'config.php';
$id_pesanan = $_GET["id"];

if ( konfirmasibayar($id_pesanan) > 0 ) {
    echo "
        <script>
            alert('Berhasil dikonfirmasi');
            document.location.href = 'daftarbayar.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('Gagal, cek kode');
        document.location.href = 'daftarbayar.php';
    </script>
    ";
}
?>