<?php
include "koneksi.php";
if(isset($_POST['simpan'])) {
  $periode_pmb = $_POST['bulan_pk'];
  $jumlah_pmb = $_POST['jumlah_pk'];
  $sql = mysqli_query($koneksi, "INSERT INTO tb_pk VALUES ('$kode_pmb','$periode_pmb','$jumlah_pmb')") or
    die(mysqli_error($koneksi));
  if($koneksi) {
    echo "<script>alert('Berhasil menambahkan data'); window.location='input.php';</script>";
  }
}
?>