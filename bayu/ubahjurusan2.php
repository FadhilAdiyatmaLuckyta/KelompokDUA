<?php
require 'config.php';

//AMBIL DATA DI URL
$id_jurusan= $_GET["id_jurusan"];

// QUERY DATA USER BERDASARKAN ID
 $jurusann = query("SELECT * FROM jurusan WHERE id_jurusan = $id_jurusan")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    //cek data berhasil diubah apa gak
    if( ubahjurusan($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftarjurusan1.php';
        </script>
    ";
            
}else {
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
    <h1> Ubah Data Jurusan<h1>

    <form action="" method ="post" enctype="multipart/form-data">
    <table width="25%" border="0">
           
            <tr> 
                <td><label for="id_jurusan"></label></td>
                <td><input type="hidden"  class="form_login" id ="id_jurusan" name="id_jurusan" autocomplete="off" required value="<?= $jurusann["id_jurusan"]; ?>"></td>
                <input type="hidden" name="gambarLama" value="<?= $jurusann["gambar"]; ?>">
            </tr>
            <tr> 
                <td><label for="jurusan">Jurusan</td>
                <td><input type="text"  class="form_login" id="jurusan"  name="jurusan" autocomplete="off" required value="<?= $jurusann["jurusan"]; ?>" ></td>
            </tr>
            <tr> 
                <td><label for="id_driver">ID Driver</td>
                <td><input type="text"  class="form_login" id="id_driver"  name="id_driver" autocomplete="off" required value="<?= $jurusann["id_driver"]; ?>" ></td>
            </tr>
            <tr> 
                <td><label for="mobil">Mobil</td>
                <td><input type="text"  class="form_login" id="mobil"  name="mobil" autocomplete="off" required value="<?= $jurusann["mobil"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="plat_nomor">Plat Nomer</td>
                <td><input type="text"  class="form_login" id="plat_nomor" name="plat_nomor" autocomplete="off" required value="<?= $jurusann["plat_nomor"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="kursi">Kursi</td>
                <td><input type="text"  class="form_login" id="kursi" name="kursi" autocomplete="off" required value="<?= $jurusann["kursi"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="jam_beranngkat">Jam Keberangkatan</td>
                <td><input type="time"  class="form_login" id="jam_beranngkat" name="jam_beranngkat" autocomplete="off" required value="<?= $jurusann["jam_beranngkat"]; ?>"></td>
            </tr>
            <tr> 
                <td><label for="harga">Harga Tiket</td>
                <td><input type="text"  class="form_login" id="harga" name="harga" autocomplete="off" required value="<?= $jurusann["harga"]; ?>"></td>
            </tr>
            <tr>
            <td>
            <img src="img/<?= $jurusann["gambar"]; ?>" height="100px" width="100px">
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