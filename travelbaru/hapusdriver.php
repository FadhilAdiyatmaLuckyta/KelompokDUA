<?php
require 'config.php';
$id_driver = $_GET["id_driver"];

if ( havus($id_driver) > 0 ) {
    echo "
        <script>
            alert('data berhasi dihapus');
            document.location.href = 'daftardrivers.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'daftardrivers.php';
    </script>
    ";
}
?>