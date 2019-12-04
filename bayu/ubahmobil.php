<?php
require 'config.php';

//AMBIL DATA DI URL
$id_car= $_GET["id_car"];

// QUERY DATA USER BERDASARKAN ID
 $mobil= query("SELECT * FROM cars WHERE id_car = $id_car")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil diubah apa gak
    if( mobilrubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftarmobil.php';
        </script>
    ";
            
    }else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'daftarmobil.php';
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
    <center><h1>Edit Data Pengguna<h1></center>

    <form action="" method ="post" enctype="multipart/form-data">
    <table width="35%" border="0">
            <input type="hidden" name="id_car" value="<?= $mobil["id_car"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mobil["gambar"]; ?>">
            <tr> 
                <td>Merk</td>
                <td><input type="text"  class="form_login" id ="merk" name="merk" autocomplete="off" required value="<?= $mobil["merk"]; ?>"></td>
            </tr>
            <tr> 
                <td>Warna</td>
                <td><input type="text"  class="form_login" id="warna" name="warna" autocomplete="off" required value="<?= $mobil["warna"]; ?>" ></td>
            </tr>
            <tr> 
                <td>Plat Nomor</td>
                <td><input type="text"  class="form_login" id="nopol" name="nopol" autocomplete="off" required value="<?= $mobil["nopol"]; ?>"></td>
            </tr>
            <tr> 
                <td>Kursi</td>
                <td><input type="number"  class="form_login" id="kursi" name="kursi" autocomplete="off" required value="<?= $mobil["kursi"]; ?>"></td>
            </tr>
            <tr>
            <td>
            <img src="img/<?= $mobil["gambar"]; ?>" height="100px" width="100px">
            </td>
            <td><input type="file" name="gambar" id="gambar" ></td>
            </tr>
            <tr>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Ubah"></td>
            </tr>
        </table>
        
    </form>
    
    
</body>
</html> 