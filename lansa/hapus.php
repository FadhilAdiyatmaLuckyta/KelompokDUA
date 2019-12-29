<?php
require 'config.php';
$id_user = $_GET["id_user"];

if ( hapus($id_user) > 0 ) {
    echo "
        <script>
            alert('data berhasi dihapus');
            document.location.href = 'daftarusers.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'daftarusers.php';
    </script>
    ";
}
?>