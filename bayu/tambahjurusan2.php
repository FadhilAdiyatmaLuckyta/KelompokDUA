<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( jurusan($_POST) > 0 ) {
       echo "
       <script>
       alert('Berhasil menambahkan jurusan');
       document.location.href = 'tambahjurusan2.php';
   </script>";
            
    }else {
        echo "
        Maaf tambah jurusan gagal, mohon coba lagi"; 
    }

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Driver</title>
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
    <style>

    .form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
    </style>
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
                                            <a class="nav-link" href="daftarpesanan.php">Pemesanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="daftarbayar.php">Pembayaran</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-car"></i>Jurusan</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tambahjurusan1.php">Entry Data Jurusan</a>
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
                                            <a class="nav-link" href="tambahdrivers.php">Entry Data Driver</a>
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
                                <a class="nav-link" href="report_bayar.php" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-file-alt"></i>Laporan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
<br>
<div class="main-content">
<h1><i class="fas fa-car"></i> TAMBAH JURUSAN</h1>
<br>
<form action="" method="post" enctype="multipart/form-data">
		<table class="table">
		
		<tr>
            <td>ID Driver</td>
			<td>:</td>
			<td><input  class="form-control"  name="id_driver" id="id_driver" readonly></td>

			<td>Nama Driver</td>
			<td>:</td>
			<td><select name="nama_driver" id="nama_driver" class="form-control" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","alhamdulillah");
            $result = mysqli_query($koneksi, "SELECT * FROM drivers ORDER BY drivers asc");
            $result = mysqli_query($koneksi, "SELECT *FROM drivers");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="nama_driver"  value="' . $row['nama_driver'] . '">' . $row['nama_driver'] . '</option>';  
				$jsArray .= "prdName	['" . $row['nama_driver'] . "'] = {id_driver:'" . addslashes($row['id_driver']) . "'};\n";
				
			}
		 ?>
				   </select>
			</td>	
			</td>
            </td>        
<tr>
			<td>Mobil</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="mobil" id="mobil"  placeholder='Jenis Mobil'> </td>
            <td>Plat Nomer</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="plat_nomor" id="plat_nomor"  placeholder='Plat Nomer'> </td>
</tr>

			

<tr>
			<td>Kursi</td>
			<td>:</td>
			<td><input type="number" max="4" min="1" class="form-control"  name="kursi" id="kursi"  placeholder='Jumlah Kursi'> </td>
            <td>jam keberangkatan</td>
			<td>:</td>
			<td><input type= "time" class="form-control"  name="jam" id="jam"  placeholder='Jam Keberangkatan'> 

</tr>
<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="jurusan" id="jurusan"  placeholder='Jurusan'> </td>
            </td>
            <td>Foto Mobil</td>
			<td>:</td>
			<td><input type="file" class="form-control"  name="gambar" id="gambar"  placeholder='Foto Mobil'> </td>
</tr>
<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="text" class="form-control"  name="harga" id="harga"  placeholder='Harga'> </td>
            <td></td>
            <td></td>
            <td></td>
</tr>		
        <tr>
			<td><input class="btn btn-success" type="submit" name= "submit"  id="button" value="Tambahkan" ></td>
            <td><input class="btn btn-danger" type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
</table>

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
</body>
</html>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('id_driver').value = prdName[id].id_driver;
	
};
</script>
<script type="text/javascript"> 
<?php  ?>
function changeValue1(id){
    document.getElementById('id_car').value = prdName[id].id_car;
	
};
</script>