
<?php
require 'config.php';

session_start();
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
header("location:index.php?belom_login");
}

	//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
	$carikode= mysqli_query($conn, "SELECT max(kode_payment) FROM payment"); 
	$datakode = mysqli_fetch_array($carikode);
	if($datakode) {
		$nilaikode = substr($datakode[0], 1);
		$kode = (int) $nilaikode;
		$kode = $kode + 1;
		$hasilkode = "L".str_pad($kode, 3, "0", STR_PAD_LEFT);

	}else {
		$hasilkode = "L001";
	}
  
  $iduser = $_SESSION['id_user'];

  $query3 = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_user=$iduser AND bayar=0");
  $query4 = mysqli_query($conn,"SELECT * FROM payment WHERE id_user=$iduser AND status_bayar='Belum'");
  $query5 = mysqli_query($conn,"SELECT * FROM payment WHERE id_user=$iduser AND status_bayar='Sudah'");
  $queryjurusan = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM jurusan"));

	//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
	if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form

    //cek data berhasil ditambah apa gak
    if( bayar($_POST) > 0 ) {
       echo "
       Berhasil mengunggah bukti pembayaran, mohon tunggu verifikasi pembayaran";
      header("location:pembayarann.php");
    }else {
        echo "
        Maaf anda gagal mengunggah bukti pembayaran, mohon coba lagi"; 
    }

} 		
		
      ?>


<!DOCTYPE html>
<html lang="en" id="home">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Input Pemesanan Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
img{
  width:100%;
  max-width:100%;
}

.dropbtn {
  
  color: white;
  padding: 15px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #FFCC00;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
 
}

.navbar{
  position:fixed;
  width:100%;
  background-color:#000;
  z-index:10;
  border-radius:0;
  border-color:transparent;
}
.navbar-default .navbar-nav > li > a{
  color:#fff;
  
}
.f{
  float: right;
}

#bayarTabel{
  border-collapse: collapse;
  color:#444444;
  background: #f6f6f6;
  padding: 10px !important;
  display:inline-block;
  border-radius:5px;
}

#bayarTabel th{
  color: black;
}

#bayarTabel td, #bayarTabel th{
  padding: 5px 10px;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #3399FF;
  color: white;
}

.modal-body {
  padding: 2px 16px;

}

.modal-footer {
  padding: 2px 16px;
  background-color: #3399FF;
  color: white;
}

div.ex3 {
  background-color: white;
  width: 742px;
  height: 250px;
  overflow: auto;
}
</style>
    
  </head>
  <body>

  <!--Navbar-->
  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="dropdown" style="float:right;">
  <a class="dropbtn" ><font face="Berlin Sans FB" color="white"><?php echo $_SESSION['username']; ?></a>
  <div class="dropdown-content">
  <a href="http://localhost/bayu/ubahuser.php?id_user=<?= $_SESSION['id_user']?>" style="font-family:Berlin Sans FB; color:#black;"><i class="far fa-user-circle"></i> Lihat Profil</a>
  <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
  </div>
</div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="indexuser.php" style="font-family:Berlin Sans FB">Lansa Trans</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="indexuser.php" style="font-family:Berlin Sans FB"><i class="fas fa-shopping-cart"></i> Pemesanan</a></li>
        <li><a href="#" style="font-family:Berlin Sans FB"><i class="fas fa-calculator"></i> Pembayaran</a></li>
        <li><a href="mo2.php"style="font-family:Berlin Sans FB" ><i class="fas fa-search"></i> Cek Kursi</a></li>
        <li><a href="#" style="font-family:Berlin Sans FB" id="myBtn"><i class="far fa-question-circle"></i> Cara Pesan</a></li>
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    
   
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://images.wallpaperscraft.com/image/volkswagen_bus_toy_133246_1280x800.jpg" alt="Tujuan" class="img-responsive">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="https://images.wallpaperscraft.com/image/bus_toy_bokeh_127959_1280x800.jpg" alt="Tujuan" class="img-responsive">
      <div class="carousel-caption">
      ...
      </div>
    </div>
    <div class="item">
      <img src="https://images.wallpaperscraft.com/image/city_bus_stops_road_85100_1280x800.jpg" alt="Tujuan" class="img-responsive">
      <div class="carousel-caption">
      ...
      </div>
    </div>
    
    
  </div>

  
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Dropdown -->
    
 <!-- akhir navbar -->

    <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2><font face="Berlin Sans FB" color="black">Cara Pesan</h2>
  </div>
  <div class="modal-body">
  
        <p><font face="Berlin Sans FB" color="black">1. Cari menu pemesanan</p>
        <p><font face="Berlin Sans FB" color="black">2. Lakukan pemesanan tiket</p>
        <p><font face="Berlin Sans FB" color="black">3. Setelah berhasil melakukan pemesanan tiket, segera lakukan pembayaran sesuai nominal harga dengan cara transfer ke nomer Rekening 99992039925892</p>
        <p><font face="Berlin Sans FB" color="black">4. Upload bukti pembayaran dan tunggu verifikasi dari admin</p>
        <p><font face="Berlin Sans FB" color="black">5. Setelah pembayaran terverifikasi, maka anda bisa mencetak tiket</p>
  </div>
  <div class="modal-footer">
    <h5><font face="Berlin Sans FB" color="black">Lansa Trans</h5>
  </div>
</div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
</script>

    
    <!--akhir jumbotron-->

    <!--Profil Kami-->
    

   
    <!--akhir about-->

    <!--Galeri-->
   
    <!--akhir Galeri-->

    <!--Kontak Kami-->
  
    <!--pemesanan-->
    <div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#car" style="font-family:Berlin Sans FB"><i class="fas fa-calculator"></i> Pembayaran</a></li>
							</ul>
						</div>

						<!--Harga-->

						<div class="tab-content">
							<div id="car" class="tab-pane fade in active">
              <?php if (mysqli_num_rows($query3) > 0) { ?>
							<form action="" method="post" enctype="multipart/form-data">
                <strong style="display:block; font-family:arial;margin-bottom:10px;">Daftar pesanan yang belum dibayar</strong>
                <table id="bayarTabel" style="margin-bottom:20px;">
                  <tr>
                    <th>Kode Booking</th>
                    <th>Jurusan</th>
                    <th>Tanggal Berangkat</th>
                    <th>Jemput</th>
                    <th>Kursi</th>
                    <th>Harga</th>
                  </tr>
                  <?php
                  
                  $totalharga = 0;
                  while ($row = mysqli_fetch_assoc($query3)) { 
                    
                  ?>
                    <tr>
                      <td><?= $row['kode_booking'] ?></td>
                      <td><?= getJurusan($row['id_jurusan'])['jurusan'] ?></td>
                      <td><?= $row['tgl_berangkat'] ?></td>
                      <td><?= $row['jemput'] ?></td>
                      <td><?= getKursi($row['id_kursi'])['no_kursi'] ?></td>
                      <td>Rp<?= number_format($row['harga']) ?></td>
                    </tr>

                    <input type="hidden" name="kodepesan[]" value="<?= $row['id_pesanan'] ?>">

                  <?php 
                    $totalharga = $totalharga + $row['harga'];
                  } ?>
                </table>

				              	<div class="row">
                    

                   <div class="col-md-2">
				                  <div class="form-group">
										<p for="date" style="font-family:Berlin Sans FB">Kode Pembayaran</p>
										<div class="form-field">
										<input type="text" class="form-control" name="kode_payment" value="<?php echo $hasilkode;?>" readonly="readonly">
										</div>  
				                  </div>
                        </div>									

						<div class="col-md-2">
				                  <div class="form-group">
										<p for="date" style="font-family:Berlin Sans FB">Total Harga</p>
										<div class="form-field">
                    <input class="form-control"  name="harga" id="harga" value="Rp<?= number_format($totalharga) ?>" readonly/>
										</div>  
				                  </div>
                        </div>

                        <div class="col-md-2">
				                  <div class="form-group">
										<p for="date" style="font-family:Berlin Sans FB">Bukti Pembayaran</p>
										<div class="form-field">
										<input type="file" name="gambar" id="gambar" placeholder='harga tiket'>
										</div>  
				                  </div>
                        </div>
                        </div>
                        <div class="row">
				                <div class="col-md-2">
                        <input type="submit" name= "submit"  id="button" class="btn btn-primary btn-block" value="Bayar">
                        </div>
                        </div>
				              </div>
				            </form>
                  <hr/>
                <?php } ?>

                <?php if (mysqli_num_rows($query4) > 0) { ?>
                <strong style="display:block; font-family:arial;margin-bottom:10px;">Daftar pesanan yang menunggu konfirmasi</strong>
                <table id="bayarTabel" style="margin-bottom:20px;">
                  <tr>
                    <th>Kode Booking</th>
                    <th>Jurusan</th>
                    <th>Tanggal Berangkat</th>
                    <th>Jemput</th>
                    <th>Nomor Kursi</th>
                    <th>Status</th>
                  </tr>
                  <?php
                  while ($row = mysqli_fetch_assoc($query4)) { 
                  ?>
                    <tr>
                      <td><?= getPesanan($row['id_pesanan'])['kode_booking'] ?></td>
                      <td><?= getJurusan(getPesanan($row['id_pesanan'])['id_jurusan'])['jurusan'] ?></td>
                      <td><?= getPesanan($row['id_pesanan'])['tgl_berangkat'] ?></td>
                      <td><?= getPesanan($row['id_pesanan'])['jemput'] ?></td>
                      <td><?= getKursi(getPesanan($row['id_pesanan'])['id_kursi'])['no_kursi'] ?></td>
                      <td><em style="padding:5px 10px; background:orange;color:#444444">Menunggu Konfirmasi Admin</em></td>
                    </tr>

                  <?php 
                  } ?>
                </table>
                <?php } ?>

                <?php if (mysqli_num_rows($query5) > 0) { ?>
                <strong style="display:block; font-family:arial;margin-bottom:10px;">Pesanan Selesai</strong>
                <div class="ex3">
                <table id="bayarTabel" style="margin-bottom:20px;">
                  <tr>
                    <th>Kode Booking</th>
                    <th>Jurusan</th>
                    <th>Tanggal Berangkat</th>
                    <th>Jemput</th>
                    <th>Nomor Kursi</th>
                    <th>Status</th>
                  </tr>
                  <?php
                  while ($row = mysqli_fetch_assoc($query5)) { 
                  ?>
                    <tr>
                      <td><?= getPesanan($row['id_pesanan'])['kode_booking'] ?></td>
                      <td><?= getJurusan(getPesanan($row['id_pesanan'])['id_jurusan'])['jurusan'] ?></td>
                      <td><?= getPesanan($row['id_pesanan'])['tgl_berangkat'] ?></td>
                      <td><?= getPesanan($row['id_pesanan'])['jemput'] ?></td>
                      <td><?= getKursi(getPesanan($row['id_pesanan'])['id_kursi'])['no_kursi'] ?></td>
                      <td><a href="cetaktiket.php?id=<?= $row['id_pesanan']?>" style="padding:5px 10px; background:green;color:white;">Cetak tiket</a></td>
                    </tr>

                  <?php 
                  } ?>
                </table>
                <div>
                <?php } ?>

				         </div>
			         </div>
					</div>
				</div>
			</div>
    </div>
    <!--akhir pemesanan-->
    <br>
     
       <!--akhir galeri-->
      <div class="container">
          <div class="row">
              <div class="col-sm 12 text-center">
                <h2>Kritik dan Saran </h2>
                <hr>
              </div>
          </div>  
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="" method="post" >
            <div class="form-group">
              <label form="nama">Nama</label>
              <input type="text"id="nama" name ="pengirim" class="form-control" required autocomplete="off" placeholder="masukkan nama">
            </div>
            <div class="form-group">
                <label form="email">Email</label>
                <input type="email"id="email" name="email" class="form-control" required autocomplete="off" placeholder="masukkan email">
            </div>
            <div class="form-group">
                <label form="tel">No Telp</label>
                <input type="text"id="telp" maxlength="12" onkeypress="return hanyaAngka(event)"  name="no_telp" class="form-control" required autocomplete="off" placeholder="masukkan no telepon">
            </div>
            
            <div class="form-group">
              <label form="pesan">Pesan</label>
              <textarea class="form-control" name="pesan" row="10" placeholder="masukkan pesan" autocomplete="off" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
      
    <!--akhir contact-->
  
  
  

    <!--footer-->
    
    <!-- Footer -->
<footer>
<div class="container">
    <section style="height:80px;"></section>
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
              <h2>Lansa Trans</h2>
              <div align="justify">
                <p>Lansa Trans adalah jasa travel yang berkantor pusat di Jl.Slamet Riyadi No.155, Jember. Kami melayani rute antara lain :
					         Jember-Surabaya, Jember-Malang, Jember-Denpasar. Kami melakukan perjalanan setiap harinya. Harga untuk perjalanan sangatlah
					         terjangkau dan kami melakukan penjemputan sesuai pesanan pelanggan. Kepuasan Pelanggan adalah nomor satu </p> 
                <p>© Copyright 2019 | Built by Kelompok 2. </p>
               </div>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Tentang —</h4>
            	<div class="col-md-6">
              <ul class="list">
                        <li><a ><i class="fas fa-road"></i> Jl.Slamet Riyadi No.155, Jember, Jawa Timur</a></li>
                        <li><a ><i class="fas fa-phone"></i> 082132632620 | Khunika Maulana</a></li>
                        <li><a >Terms & Condition</a></li>
                        <li><a >Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="https://www.instagram.com/lansatrans/?hl=id">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="#">KELOMPOK 2</a></p></section>

</div>
</footer>
</body> 
</html>
<!-- Footer -->
    <!--akhir footer-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
     
    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
    
  </script>
  <script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('harga').value = prdName[id].harga;
	document.getElementById('id_jurusan').value = prdName[id].id_jurusan;
	document.getElementById('jam_beranngkat').value = prdName[id].jam_beranngkat;
};
function changeValue1(id){
    document.getElementById('id_kursi').value = prdName[id].id_kursi;
	
};
  </script>
    
