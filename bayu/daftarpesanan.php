<?php
require 'config.php';
$pesanan = query("SELECT * FROM pesanan");

//TOMBOL CARI DIKLIK
if (isset($_POST["cari"]) ) {
    $driver  = carii ($_POST["keyword"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Pesanan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animatetb.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar-tb/perfect-scrollbar.css">
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    
</head>
<body>

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a href="halamanadmin.php" style="color:Black;" class="navbar-brand"><i class="fas fa-user-circle"></i> Halaman Admin</a>
                
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/user1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
		</div>
		
		 <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-calculator"></i>Transaksi<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Pemesanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="daftarbayar.php">Pembayaran</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-car"></i>Jurusan</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tambahjurusan2.php">Entry Data Jurusan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="daftarjurusan.php">Lihat Data Jurusan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-user"></i>Users</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tambahdriver.php">Entry Data Driver</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="daftardriver.php">Lihat Data Driver</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="daftarusers.php">Lihat Data User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="report_bayar.php"  aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-file-alt"></i>Laporan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
<br>
<div class="main-content">
<div class="container">
  <h1><i class="fas fa-shopping-cart"></i> DAFTAR PESANAN</h1>
  <!-- Button to Open the Modal -->
  <!--<button type="button" class="btn btn-primary hide_on_print" data-toggle="modal" data-target="#addData"><i class="fas fa-user-plus"></i> Tambah</button>-->
 

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="Silahkan cari  sesuatu..." autocomplete="off">
  <button class="btn btn-primary btn-xs" type="submit" name="cari"> Cari</button>
  
</form>
<br>
<div><a href="cetakdaftarpesan.php" class="btn btn-primary  btn-xs">Cetak</a></div>
    <br>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Aksi</th>
        <th>ID Pesanan</th>
        <th>Kode Booking</th>
        <th>ID Jurusan</th>
        <th>ID User</th>
        <th>Tanggal Berangkat</th>
        <th>Tempat Jemput</th>
        <th>Tanggal Pesan</th>
        <th>ID Kursi</th>
        <th>Harga</th>

    </tr>   
    <php $i = 1; ?>
    <?php foreach( $pesanan as $row ) : ?>
    <tr>
</thead>
<tbody>
	<tr>
         <td>
            
        <a href="hapuspesanan.php?id_pesanan=<?= $row["id_pesanan"]; ?>"" onclick="return confirm('yakin nih mau ngehapus ?');"><i class="fas fa-trash-alt"></i> Hapus</a>
        </td>
        <td><?= $row["id_pesanan"]; ?></td>
        <td><?= $row["kode_booking"]; ?></td>
        <td><?= $row["id_jurusan"]; ?></td>
        <td><?= $row["id_user"]; ?></td>
        <td><?= $row["tgl_berangkat"]; ?></td>
        <td><?= $row["jemput"]; ?></td>
        <td><?= $row["tgl_pesan"]; ?></td>
        <td><?= $row["id_kursi"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>
	</tbody>
    <php $i++; ?>
    <?php endforeach; ?>
					</table>




	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
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