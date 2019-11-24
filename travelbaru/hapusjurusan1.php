<?php
require 'config.php';
$id_jurusan = $_GET["id_jurusan"];

if ( hapusjurusan($id_jurusan) > 0 ) {
    echo "
        <script>
            alert('data berhasi dihapus');
            document.location.href = 'daftarjurusan1.php';
        </script>
    ";
}else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'daftarjurusan1.php';
    </script>
    ";
}
?>