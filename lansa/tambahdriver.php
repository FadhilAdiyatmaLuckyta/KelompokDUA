<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( tambahkan ($_POST) > 0 ) {
       echo "
       <script>
       alert('Berhasil menambahkan driver');
       document.location.href = 'tambahdriver.php';
   </script>";
            
    }else {
        echo "
        Maaf tambah driver gagal, mohon coba lagi"; 
    }

} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Driver</title>
  
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
    
<h1 style="font-family:Calibri; color:Black;"> Tambah Driver<h1>

    <div class="container">
    <form action="" method ="post">
  
  <div class="row">
  
  <br>
  
    <div class="col-25">
      <label style="font-family:Calibri">Nama</label>
    </div>
    <div class="col-75">
    <input type="text"  class="form_login" id ="nama" name="nama_driver" autocomplete="off" placeholder="Masukkan Nama" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Tempat Lahir</label>
    </div>
    <div class="col-75">
    <input type="text"  class="form_login" id="tmpt" name="tempat_lahirdriver" autocomplete="off" placeholder="Masukkan Tempat Lahir" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Tanggal Lahir</label>
    </div>
    <div class="col-75">
    <input type="date"  class="form_login" id="tgl" name="tanggal_lahirdriver" autocomplete="off" placeholder="Masukkan Tanggal Lahir" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Jenis Kelamin</label>
    </div>
    <div class="col-75">
    <input type="radio" name="jenis_kelamin" 
                    <?php if (isset($jekel) && $jekel=="Perempuan") echo "checked";?>
                        value="Perempuan" required><label style="font-family:Calibri">Perempuan</label>
                    <input type="radio" name="jenis_kelamin"
                    <?php if (isset($jekel) && $jekel=="Laki-laki") echo "checked";?>
                    value="Laki-laki" required><label style="font-family:Calibri">Laki-laki</label>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Nomor SIM</label>
    </div>
    <div class="col-75">
    <input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form_login" id="nod" name="no_sim" placeholder="Masukkan Nomer SIM" autocomplete="off" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Telepon</label>
    </div>
    <div class="col-75">
    <input type="text" maxlength="12" onkeypress="return hanyaAngka(event)" class="form_login" id="telepon" name="telp" autocomplete="off" placeholder="Masukkan Nomer Telepon" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Alamat</label>
    </div>
    <div class="col-75">
    <input type="text"  class="form_login" id="alamat" name="alamat_driver" autocomplete="off" placeholder="Masukkan Alamat" required>
    </div>
  </div>
  <br>
  <div class="row">
  <input href= "prosesubah1.php" type="submit" name= "submit"  id="button" value="Tambahkan">
  </div>
  </form>
</div>


</body>
</html>