<?php
require 'config.php';

//AMBIL DATA DI URL
$id_payment= $_GET["id_payment"];

// QUERY DATA USER BERDASARKAN ID
 $payment= query("SELECT * FROM payment WHERE id_payment = $id_payment")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil diubah apa gak
    if( ubahstatus ($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftarusers.php';
        </script>
    ";
            
    }else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'daftarusers.php';
        </script>
    ";
    }

} 
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  margin: auto;
  width: 40%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
    
    <title>Ubah Data Pengguna</title>

</head>

<body>
    <center><h1>Verifikasi Pembayaran<h1></center>

    <form action="" method ="post">
    <table width="35%" border="0">
            <input type="hidden" name="id_payment" value="<?= $payment["id_payment"]; ?>"
            <tr> 
                <td>Kode Pembayaran</td>
                <td><input type="text"  class="form_login" id ="kode_payment" name="kode_payment" autocomplete="off" required value="<?= $payment["kode_payment"]; ?>"></td>
            </tr>
            <tr> 
                <td>ID Pesanan</td>
                <td><input type="text"  class="form_login" id="id_pesanan" name="id_pesanan" autocomplete="off" required value="<?= $payment["id_pesanan"]; ?>" ></td>
            </tr>
            <tr> 
                <td>Tanggal Bayar</td>
                <td><input type="date"  class="form_login" id="tgl" name="tgl_payment" autocomplete="off" required value="<?= $payment["tgl_payment"]; ?>"></td>
            </tr>
        
            <tr> 
                <td>Status Bayar</td>
                <td><input type="text"  class="form_login" id="status_bayar" name="status_bayar" autocomplete="off" required value="<?= $payment["status_bayar"]; ?>" ></td>
            </tr>
            <tr>
            <td>
            <img src="img/<?= $payment["bukti"]; ?>" height="100px" width="100px">
            </td>
            <td><input type="hidden" name="gambar" id="gambar" value="<?= $payment["bukti"]; ?>" ></td>
            </tr>
            <tr>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Ubah"></td>
            </tr>

            <tr> 
            
                <td></td>
				
            </tr>
        </table>
        
    </form>
    
    
</body>
</html>