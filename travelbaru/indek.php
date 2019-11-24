<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek pesan berhasil ditambah apa gak
    if( kirim ($_POST) > 0 ) {
       echo "
       Terima kasih pesan telah terkirim ke pihak Lansa Trans";
            
    }else {
        echo "
        Maaf daftar gagal, mohon coba lagi"; 
    }

} 
?>
<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="login.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

    <!-- navbar -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            <a href="#home" class="navbar-brand page-scroll " style="font-family:Berlin Sans FB">Lansa Trans</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav ">
              <li><a href="#about" class="page-scroll" style="font-family:Berlin Sans FB"><span class="glyphicon glyphicon-home"></span> Profil Kami</a></li>
              <li><a href="#portfolio" class="page-scroll" style="font-family:Berlin Sans FB"><i class="fa fa-fw fa-photo"></i> Galeri</a></li>
              <li><a href="#contact" class="page-scroll" style="font-family:Berlin Sans FB"><i class="fa fa-fw fa-envelope"></i> Kontak Kami</a></li>
              <li><a href="login.php" style="font-family:Berlin Sans FB"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            </ul>
          </div>
          
        </div>
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
            </justify><p class="pKiri">Lansa Trans adalah jasa travel yang berkantor pusat di Jl.Slamet Riyadi No.155, Jember. Kami melayani rute antara lain :
              Jember-Surabaya, Jember-Malang, Jember-Denpasar. Kami melakukan perjalanan setiap harinya. Harga untuk perjalanan sangatlah
              terjangkau dan kami melakukan penjemputan sesuai pesanan pelanggan. Kepuasan Pelanggan adalah nomor satu
            </p>
            </div>  
            
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
              <img src="img/portfolio/foto5.jpeg">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/foto7.jpeg">
            </a>
          </div>

         <!--Kontak Kami-->
    
    <form action="" method ="post">
    <table width="25%" border="0">
            <tr> 
                <td><label for="nama">Nama</label></td>
                <td><input type="text"  class="form_login" id ="nama" name="pengirim" autocomplete="off" placeholder="Masukkan nama anda" required></td>
            </tr>
            <tr> 
                <td><label for="tmpt">Email</td>
                <td><input type="text"  class="form_login" id="tmpt" name="email" autocomplete="off" placeholder="Masukkan tempat lahir anda" required></td>
            </tr>
            <tr> 
                <td><label for="tgl">Telepon</td>
                <td><input type="text"  class="form_login" id="tgl" name="no_telp" autocomplete="off" placeholder="Masukkan tanggal lahir anda" required></td>
            </tr>
            <tr> 
                <td><label for="nod">Pesan</td>
                <td><input type="text" maxlength="16" onkeypress="return hanyaAngka(event)" class="form_login" id="nod" name="nomer_id" placeholder="Masukkan nomer ID" autocomplete="off" required></td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "submit"  id="button" class="tombol_login" value="Daftar" disabled></td>
            </tr>
        </table>
        ?>
    </form>
     

        
      </div>
    </section>
    <!--akhir Galeri-->

   
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
     

     <?php
    
     ?>
  </body>
</html>
