<?php
require 'config.php';
session_start();

//AMBIL DATA DI URL

if ($_SESSION['level'] == "pengguna") {
  if ($_GET["id_user"] == $_SESSION['id_user']) {
  
    $id_user= $_GET["id_user"];
    $cok = false;
  
  } else {
  
    $cok = true;
    $id_user= $_SESSION["id_user"];
  
  }

} else {
  $cok = false;
  $id_user= $_GET["id_user"];
}

// QUERY DATA USER BERDASARKAN ID
 $user= query("SELECT * FROM users WHERE id_user = $id_user")[0];


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
  
    //cek data berhasil diubah apa gak
    if ( ubah($_POST) > 0 ) {
      if ($_SESSION['level'] == 'pengguna') {

        echo "
          <script>
          alert('data berhasi diubah');
          document.location.href = 'indexuser.php';
          </script>
        ";

      } else {
        echo "
          <script>
          alert('data berhasi diubah');
          document.location.href = 'daftarusers.php';
          </script>
        ";
      }
            
    }else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'daftarusers.php';
        </script>
    ";
    }

} elseif (isset($_POST["pwsubmit"])) {
  
  if ( ubahPass($_POST) == 'pwlama' ) {

    $alertpw = '<p style="color:red;font-size:15px;">Password lama Anda salah</p>';
  } elseif (ubahPass($_POST) == 'pwdb') {
    $alertpw = '<p style="color:red;font-size:15px;">Error masukan password</p>';
  } else {
    $alertpw = '<p style="color:green;font-size:15px;">Password berhasil diubah</p>';
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
    background-image: url(img/car1.jpg);
}

input[type=text],input[type=password],input[type=date], select, textarea {
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

#pwbutton{
  float:none;
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
    <h1 style="font-family:Calibri; color:White;"> Ubah Data Pengguna<h1>

    <div class="container">

<!--- INI FORM EDIT BIASA --->
<form action="" method ="post">

<?php
  if ($cok) {
    echo "<p style='font-family:arial;color:red;font-size:16px;'>Anda tidak mempunyai akses ke id ".$_GET['id_user'].",<br/> ID Anda ".$_SESSION['id_user']." sebagai ".$_SESSION['nama'].".</p>";

  }
?>

    <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Nama</label>
    </div>
    <div class="col-75">
    <input type="text" id ="nama" name="nama" autocomplete="off" required value="<?= $user["nama"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Tempat Lahir</label>
    </div>
    <div class="col-75">
    <input type="text" id="tmpt" name="tempat_lahir" autocomplete="off" required value="<?= $user["tempat_lahir"]; ?>" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Tanggal Lahir</label>
    </div>
    <div class="col-75">
    <input type="date" id="tgl" name="tanggal_lahir" autocomplete="off" required value="<?= $user["tanggal_lahir"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Jenis Kelamin</label>
    </div>
    <div class="col-75">
    <?php if ($user['jekel'] == 'Laki-laki') { 
							$laki = 'checked="checked"';
							$perempuan = '';
						} else { 
							$perempuan = 'checked="checked"';
							$laki = '';
						} ?>

						<input type="radio" name="jekel" value="Laki-laki" <?= $laki ?>><label style="font-family:Calibri">Laki-laki</label>
						<input type="radio" name="jekel" value="Perempuan" <?= $perempuan ?>> <label style="font-family:Calibri">Perempuan</label>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Nomor ID</label>
    </div>
    <div class="col-75">
    <input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" id="nod" name="nomer_id" autocomplete="off" required value="<?= $user["nomer_id"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Telepon</label>
    </div>
    <div class="col-75">
    <input type="text" maxlength="13" onkeypress="return hanyaAngka(event)" id="telepon" name="telepon" autocomplete="off"  required value="<?= $user["telepon"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Alamat</label>
    </div>
    <div class="col-75">
    <input type="text" id="alamat" name="alamat" autocomplete="off" required value="<?= $user["alamat"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Email</label>
    </div>
    <div class="col-75">
    <input type="text" id="email" name="email" autocomplete="off" required value="<?= $user["email"]; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Username</label>
    </div>
    <div class="col-75">
    <input type="text" id="username" name="username" autocomplete="off" required value="<?= $user["username"]; ?>">
    </div>
  </div>
<!-- 
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Password</label>
    </div>
    <div class="col-75">
    <input type="password" id="password" name="password" autocomplete="off" required value="<?= $user["password"]; ?>">
    </div>
  </div> -->

  <br>
  <div class="row">
  <input type="submit" name= "submit"  id="button" value="Ubah">
  </div>
</form>

<!--- INI FORM EDIT BIASA --->
<form action="" method ="post">
  <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

  <label>GANTI PASSWORD</label>
  <?php if (isset($alertpw)){ echo $alertpw; } ?>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Password lama</label>
    </div>
    <div class="col-75">
    <input type="password" name="passwordlama" id="passwordlama" autocomplete="off" required/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Password baru</label>
    </div>
    <div class="col-75">
    <input type="password" name="passwordbaru" id="passwordbaru" autocomplete="off" required disabled/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="font-family:Calibri">Ulangi password baru</label>
    </div>
    <div class="col-75">
    <input type="password" name="upassbaru" id="upassbaru" autocomplete="off" required disabled/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
    </div>
    <div class="col-75">
      <input type="submit" name="pwsubmit"  id="pwbutton" value="" disabled/>
    </div>
  
  </div>

</form>
</div>


<script src="js/jquery-3.4.1.min.js"></script>

<script>

  $('#pwbutton').css({'background' : '#70ab73', 'cursor':'not-allowed'});
  $('#pwbutton').val('Password baru tidak cocok');

  $("#passwordlama").keyup(function(){
    if ($(this).val().length > 0) {
      $("#passwordbaru").removeAttr('disabled');
    } else {
      $("#passwordbaru").attr('disabled', 'disabled');
    }
  });

  $("#passwordbaru").keyup(function(){
    if ($(this).val().length > 0) {
      $("#upassbaru").removeAttr('disabled');
      $("#passwordlama").attr('readonly','readonly');
    } else {
      $("#upassbaru").val("");
      $("#upassbaru").attr('disabled', 'disabled');
      $("#passwordlama").removeAttr('readonly');
    }
  });

  $("#upassbaru").keyup(function(){
    if ($(this).val().length > 0) {

      $("#passwordbaru").attr('readonly', 'readonly');

      if ($("#passwordbaru").val() == $("#upassbaru").val() ) {
        $('#pwbutton').css({'background' : '#4CAF50', 'cursor':'pointer'});
        $("#pwbutton").removeAttr('disabled');
        $('#pwbutton').val('Ganti password');
      } else {
        $('#pwbutton').css({'background' : '#70ab73', 'cursor':'not-allowed'});
        $("#pwbutton").attr('disabled', 'disabled');
        $('#pwbutton').val('Password baru tidak cocok');
      }

    } else {
      $("#passwordbaru").removeAttr('readonly');
    }

    if ($("#passwordbaru").val() == $("#upassbaru").val() ) {
      $('#pwbutton').css({'background' : '#4CAF50', 'cursor':'pointer'});
      $("#pwbutton").removeAttr('disabled');
      $('#pwbutton').val('Ganti password');
    } else {
      $('#pwbutton').css({'background' : '#70ab73', 'cursor':'not-allowed'});
      $("#pwbutton").attr('disabled', 'disabled');
      $('#pwbutton').val('Password baru tidak cocok');
    }
  });

  
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	
  
</script>
</body>
</html>