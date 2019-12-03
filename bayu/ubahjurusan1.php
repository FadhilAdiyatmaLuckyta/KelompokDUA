<?php
require 'config.php';

//AMBIL DATA DI URL
$id_jurusan= $_GET["id_jurusan"];

// QUERY DATA USER BERDASARKAN ID
 $jurusann= query("SELECT * FROM jurusan WHERE  = $id_jurusan")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    
    //cek data berhasil diubah apa gak
    if( ubahjurusan ($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftarjurusan1.php';
        </script>
    ";
     }
 
    else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'daftarjurusan1.php';
        </script>
    ";
    }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Jurusan</title>
</head>
<body>
    <h1> Tambah Data Jurusan<h1>
    <form action="" method ="_post">
    <table width="25%" border="0">
            
            <tr> 
                <td><label for="id_jurusan"></label></td>
                <td><input type="hidden"  class="form_login" id ="id_jurusan" name="id_jurusan" autocomplete="off" required value="<?= $jurusann["id_jurusan"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="id_driver">id_driver</td>
                <td><input type="text"  class="form_login" id="id_driver" readonly name="id_driver"onkeypress="return hanyaAngka(event)" autocomplete="off" required value="<?= $jurusann["id_driver"]; ?>" ></td>
            </tr>
            <tr> 
                <td><label for="id_car">id_car</td>
                <td><input type="text"  class="form_login" id="id_car" readonly name="id_car"onkeypress="return hanyaAngka(event)" autocomplete="off" required value="<?= $jurusann["id_car"]; ?>"></td>
            </tr>
            
                <td><label for="jurusan">jurusan</td>
                <td><input type="text"  class="form_login" id="jurusan" name="jurusan" autocomplete="off" required value="<?= $jurusann["jurusan"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="jam">Email</td>
                <td><input type="text"  class="form_login" id="jam" name="jam" autocomplete="off" required value="<?= $jurusann["jam"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="harga">harga</td>
                <td><input type="text"  class="form_login" id="harga" name="harga" autocomplete="off" required value="<?= $jurusann["harga"]; ?>"></td>
            </tr>
            <tr> 
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="perbarui"></td>
            </tr>
        </table>
        
    </form>
    
    
</body>
</html>