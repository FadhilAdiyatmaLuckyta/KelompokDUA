<?php
require 'config.php';
$id_driver = $_GET["id_driver"];

if ( hapus($id_driver) > 0 ) {
    echo "
        <script>
            alert('data berhasi dihapus');
            document.location.href = 'daftardriver.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'daftardriver.php';
    </script>
    ";
}
?>