<?php
require 'config.php';

//AMBIL DATA DI URL
$id_driver= $_GET["id_driver"];

// QUERY DATA USER BERDASARKAN ID
 $driver = query("SELECT * FROM drivers WHERE id_driver = $id_driver")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil diubah apa gak
    if( driverubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasi diubah');
            document.location.href = 'daftardriver.php';
        </script>
    ";
            
}else {
    echo "
    <script>
        alert('data gagal diubah!');
        document.location.href = 'daftardriver.php';
    </script>
";

    }
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Drivers</title>
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
    <h1 style="font-family:Calibri; color:Black;"> Ubah Data Driver<h1>

    <div class="container">
    <form action="" method ="post">
  <input type="hidden" name="id_driver" value="<?= $driver["id_driver"]; ?>">
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Nama</label>
    </div>
    <div class="col-75">
    <input type="text"  id ="nama" name="nama_driver" autocomplete="off" required value="<?= $driver["nama_driver"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Tempat Lahir</label>
    </div>
    <div class="col-75">
      <input type="text" id="tmpt" name="tempat_lahirdriver" autocomplete="off" required value="<?= $driver["tempat_lahirdriver"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Tanggal Lahir</label>
    </div>
    <div class="col-75">
    <input type="date"  id="tgl" name="tanggal_lahirdriver" autocomplete="off" required value="<?= $driver["tanggal_lahirdriver"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Jenis Kelamin</label>
    </div>
    <div class="col-75">
    <?php if ($driver['jenis_kelamin'] == 'Laki-laki') { 
							$laki = 'checked="checked"';
							$perempuan = '';
						} else { 
							$perempuan = 'checked="checked"';
							$laki = '';
                        } ?>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= $laki ?>> <label style="font-family:Calibri">Laki-laki</label>
						<input type="radio" name="jenis_kelamin" value="Perempuan" <?= $perempuan ?>> <label style="font-family:Calibri">Perempuan</label>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Nomor SIM</label>
    </div>
    <div class="col-75">
    <input type="text" maxlength="16" onkeypress="return hanyaAngka(event)"  id="nod" name="no_sim" autocomplete="off" required value="<?= $driver["no_sim"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Telepon</label>
    </div>
    <div class="col-75">
    <input type="text" maxlength="13" onkeypress="return hanyaAngka(event)"  id="telepon" name="telp" autocomplete="off"  required value="<?= $driver["telp"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Alamat</label>
    </div>
    <div class="col-75">
    <input type="text"  class="form_login" id="alamat" name="alamat_driver" autocomplete="off" required value="<?= $driver["alamat_driver"]; ?>">
    </div>
  </div>
  <br>
  <div class="row">
  <input type="submit" name= "submit"  id="button" value="Ubah">
  </div>
  </form>
</div>
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

</body>
</html>