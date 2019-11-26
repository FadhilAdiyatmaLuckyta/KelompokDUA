<?php
require 'config.php';
$id_car = $_GET["id_car"];

if ( hapuzz($id_car) > 0 ) {
    echo "
        <script>
            alert('data berhasi dihapus');
            document.location.href = 'daftarmobil.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'daftarmobil.php';
    </script>
    ";
}
?>