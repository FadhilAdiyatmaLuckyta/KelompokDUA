<?php
        session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
				header("location:index.php?pesan=gagal");
		}
		
		
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
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
<style>
body {
  background-color: lightblue;
}
</style>


</head>
<body>


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
			<form action="carikode.php" method ="post">
			<?php
			if(isset($_GET["belumkonfirmasi"])){ ?>
				<h5 style="color :#FF333; text-align: center; font-family:Aller;"class="animated shake">Anda belum melakukan pembayaran, silahkan melakukan pembayaran sesuai tagihan ke nomor rekening 3214789087678798 BRI</h5>
				<?php } ?>
			<br>
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Cari Kode Pembayaran
					</span>

					<span class="txt1 p-b-11">
						Kode payment
					</span>
					<div class="wrap-input100 validate-input m-b-36">
					<input type="text" name="kode_payment"  class="input100" placeholder="Masukkan Kode Payment" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
					
					
					<br>
					<div class="container-login100-form-btn">
						<input type="submit" name= "login" class="login100-form-btn" value="cari">
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
</body>
</html>