<?php
require 'config.php';
$kode = $_GET["kode"];

if ( hapudz($kode) > 0 ) {
    echo "
        <script>
            alert('data berhasi dihapus');
            document.location.href = 'daftarsaran.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'daftarsaran.php';
    </script>
    ";
}
?>