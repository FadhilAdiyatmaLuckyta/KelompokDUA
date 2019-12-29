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
    <style>
* {
  box-sizing: border-box;
}

body{
    background-image: url(img/car2.jpg);
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 10px 10px 10px 0;
  display: inline-block;
  font-size: 20px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

</head>

<body>

<h1 style="font-family:Calibri; color:Black;"> Ubah Data Jurusan <h1>

<div class="container">
<form action="" method ="post" enctype="multipart/form-data">

<input type="hidden"  class="form_login" id ="id_jurusan" name="id_jurusan" autocomplete="off" required value="<?= $jurusann["id_jurusan"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $jurusann["gambar"]; ?>">
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">Jurusan</label>
</div>
<div class="col-75">
<input type="text"  class="form_login" id="jurusan"  name="jurusan" autocomplete="off" required value="<?= $jurusann["jurusan"]; ?>" >
</div>
</div>
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">ID Driver</label>
</div>
<div class="col-75">
<input type="text"  class="form_login" id="id_driver"  name="id_driver" autocomplete="off" required value="<?= $jurusann["id_driver"]; ?>" >
</div>
</div>
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">Mobil</label>
</div>
<div class="col-75">
<input type="text"  class="form_login" id="mobil"  name="mobil" autocomplete="off" required value="<?= $jurusann["mobil"]; ?>">
</div>
</div>
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">Plat Nomor</label>
</div>
<div class="col-75">
<input type="text"  class="form_login" id="plat_nomor" name="plat_nomor" autocomplete="off" required value="<?= $jurusann["plat_nomor"]; ?>">
</div>
</div>
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">Kursi</label>
</div>
<div class="col-75">
<input type="text"  class="form_login" id="kursi" name="kursi" autocomplete="off" required value="<?= $jurusann["kursi"]; ?>">
</div>
</div>
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">Jam Keberangkatan</label>
</div>
<div class="col-75">
<input type="time"  class="form_login" id="jam_beranngkat" name="jam_beranngkat" autocomplete="off" required value="<?= $jurusann["jam_beranngkat"]; ?>">
</div>
</div>
<div class="row">
<div class="col-25">
  <label style="font-family:Calibri">Harga Tiket</label>
</div>
<div class="col-75">
<input type="text"  class="form_login" id="harga" name="harga" autocomplete="off" required value="<?= $jurusann["harga"]; ?>">
</div>
</div>
<div class="row">
<div class="col-25">
<img src="img/<?= $jurusann["gambar"]; ?>" height="100px" width="100px">
</div>
<div class="col-75">
<input type="file" name="gambar" id="gambar" ></td>
</div>
</div>
<div class="row">
<div class="col-75">
				<input type="submit" name= "submit"  id="button" class="tombol_login" value="Ubah">
</div>
</div>
</form>
</div>


    <!--<h1> Ubah Data Jurusan<h1>

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
        
    </form>-->
    
    
</body>
</html>