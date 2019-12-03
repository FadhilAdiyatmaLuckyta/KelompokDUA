
<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( tambah ($_POST) > 0 ) {
       echo "
       Selamat anda telah mendaftar, silahkan <a href='login.php'>login</a> kembali";
            
    }else {
        echo "
        Maaf daftar gagal, mohon coba lagi"; 
    }

} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script language="javascript">
        jQuery(document).ready(function()
        {
            jQuery("#setuju").click(function(){
                if(jQuery("#button").is(":enabled"))
            {
                jQuery("#button").prop("disabled",true);
            }
            else
            {
                jQuery("#button").prop("disabled",false);
            }
        });
        }
        );
        </script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
			<form action="" method ="post">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Daftar User
					</span>

					<span class="txt1 p-b-11">
						Nama
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" id ="nama" name="nama" autocomplete="off" placeholder="Masukkan nama anda" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Tempat Lahir
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					    <input type="text"  class="input100" id="tmpt" name="tempat_lahir" autocomplete="off" placeholder="Masukkan tempat lahir anda" required> 
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Tanggal Lahir
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input class="input100" type="date"  class="form_login" id="tgl" name="tanggal_lahir" autocomplete="off" placeholder="Masukkan tanggal lahir anda" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Jenis Kelamin
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="radio" name="jekel" 
                    <?php if (isset($jekel) && $jekel=="Perempuan") echo "checked";?>
                        value="Perempuan" required>Perempuan
						
                    <input type="radio" name="jekel"
                    <?php if (isset($jekel) && $jekel=="Laki-laki") echo "checked";?>
                    value="Laki-laki" required>Laki-laki
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Nomor Identitas
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input class="input100" type="text" maxlength="16" onkeypress="return hanyaAngka(event)"  id="nod" name="nomer_id" placeholder="Masukkan nomer ID" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Telepon
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input class="input100" type="text" maxlength="12" onkeypress="return hanyaAngka(event)"  id="telepon" name="telepon" autocomplete="off" placeholder="Masukkan nomer telepon anda" required> 
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Alamat
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text"  class="input100" id="alamat" name="alamat" autocomplete="off" placeholder="Masukkan alamat anda" required> 
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<td><input type="text" class="input100" id="email" name="email" autocomplete="off" placeholder="Masukkan email anda" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text" class="input100" id="username" name="username" autocomplete="off" placeholder="Masukkan Username anda" required>
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div>
					<input type="checkbox" name="level" id="setuju" class="ok" required
                    <?php if (isset($level) && $level=="pengguna") echo "checked";?>
                    value="pengguna">Saya Pengguna Baru
				    </div>

					<br>
					<div class="container-login100-form-btn">
						<input type="submit" name= "submit"  id="button" class="login100-form-btn" value="Daftar" disabled>
					</div>

				</form>
				<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
				
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>