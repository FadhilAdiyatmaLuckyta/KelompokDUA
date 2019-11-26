<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( kirim ($_POST) > 0 ) {
      echo "
      <script>
          alert('pesan terkirim');
          document.location.href = 'index2.php';
      </script>
  ";
          
  }else {
      echo "
      <script>
          alert('maaf pesan gagal dikirim!');
          document.location.href = 'index2.php';
      </script>
  ";
  }

} 
?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lansa Trans</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
    

  <!--Navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="#home" class="navbar-brand page-scroll ">Lansa Trans</a>

    
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Pemesanan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pembayaran</a>
    </li>



    
    <br/>

    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Lihat Jadwal
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="jadwal.html">Jadwal 1</a>
        <a class="dropdown-item" href="jadwal2.html">Jadwal 2</a>
      </div>
    </li>
    <li class="nav-item right">
        <a class="nav-link" href="login.php">Logout</a>
      </li>

  </ul>
</nav>

 <!-- akhir navbar -->

    <!--jumbotron-->
    <div class="jumbotron text-center">
        <img src ="img/t.jpeg"  class="img-circle">
        <h1 style="font-family:Berlin Sans FB; color:white;">Lansa Trans</h1>
        <p style="font-family:Berlin Sans FB; color:white;">Tour & Travel</p>
    </div>
    <!--akhir jumbotron-->

    <!--Profil Kami-->
    <section class="about" id="about">
       <div class="container">
         <div class="row">
             <div class="col-sm-12">
                 <h2 class ="text-center">Profil Kami</h2>
                 <hr>
             </div>
         </div>  
        <div class="row">
            <div class="col-sm-6">
                <div class="container">
             <p class="pKiri">Lansa Trans adalah jasa travel yang berkantor pusat di Jl.Slamet Riyadi No.155, Jember. Kami melayani rute antara lain :
                Jember-Surabaya, Jember-Malang, Jember-Denpasar. Kami melakukan perjalanan setiap harinya. Harga untuk perjalanan sangatlah
                terjangkau dan kami melakukan penjemputan sesuai pesanan pelanggan. Kepuasan Pelanggan adalah nomor satu
              </p> 
          
           
        </div>
       </div> 
    </section>

   
    <!--akhir about-->

    <!--Galeri-->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Galeri</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto.jpeg">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto2.jpeg">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto3.jpeg">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto4.jpeg">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto7.jpeg">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto5.jpeg">
            </a>
          </div>


         

        
      </div>
    </section>
    <!--akhir Galeri-->

    <!--Kontak Kami-->
    
    <section class="contact" id="contact">
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
      
    </section>
    <!--akhir contact-->
  
  
  

    <!--footer-->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2019 | built by Kelompok 2.</p>
          </div>
        </div>
      </div>
    </footer>
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
    
  </body>
</html>