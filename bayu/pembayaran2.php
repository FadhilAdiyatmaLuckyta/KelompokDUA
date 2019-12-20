<?php

require 'config.php';
	
?>
<!DOCTYPE html>
<html>
	<head>	 
		<title>Input Pemesanan Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	</head>
	<body>
    <?php
        session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
				header("location:index.php?pesan=gagal");
		}if($_SESSION['status_bayar']==""){
            header("location:index.php?pesan=error");
		}	
      ?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
			<form action="session_pesan.php" method="post">

			
			<br>
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Pembayaran Tiket
					</span>

					<span class="txt1 p-b-11">
						Kode Payment
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text" class="input100" name="kode_payment"  value="<?php echo $_SESSION["kode_payment"]; ?>"/>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						ID Pesanan
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text" class="input100" name="id_pesanan"  value="<?php echo $_SESSION["id_pesanan"]; ?>"/>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						ID Payment
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text" class="input100" name="ok"  value="<?php echo $_SESSION["id_payment"]; ?>"/>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Status
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text" class="input100" name="ok"  value="<?php echo $_SESSION["status_bayar"]; ?>"/>
						<span class="focus-input100"></span>
					</div>
					
					
					<br>
					<div class="container-login100-form-btn">
					<input type="submit" class="login100-form-btn" name= "login"  id="button" value="cari">
					</div>

					

				</form>
				
			</div>
		</div>
	</div>
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

		<!--<h3 align="center">INPUT PEMESANAN TIKET TRAVEL</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Pemesanan Tiket Travel</legend>
		<form action="session_pesan.php" method="post">
		<table>

		<tr>
        <tr>
				<td>Kode Payment</td>
				<td>:</td>
				<td><input type="text" name="kode_payment"  value="<?php echo $_SESSION["kode_payment"]; ?>"/></td>
		</tr>		
        <tr>
				<td>id pesanan</td>
				<td>:</td>
				<td><input type="text" name="id_pesanan"  value="<?php echo $_SESSION["id_pesanan"]; ?>"/></td>
		</tr>
        <tr>
				<td>id_payment</td>
				<td>:</td>
				<td><input type="text" name="ok"  value="<?php echo $_SESSION["id_payment"]; ?>"/></td>
		</tr>		
        <tr>
				<td>status</td>
				<td>:</td>
				<td><input type="text" name="ok"  value="<?php echo $_SESSION["status_bayar"]; ?>"/></td>
		</tr>
        <tr>
		<td><input type="submit" name= "login"  id="button" class="tombol_login" value="cari"></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
      

		</table>
    </form>
	</fieldset>-->
	</body>
</html>
