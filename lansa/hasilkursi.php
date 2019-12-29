<?php
include 'config.php';

?>

<html>
<head>
 <title>HASIL KURSI</title>

 <style>
div.gallery {
  margin: 2px;
  border: 1px solid #ccc;
  float: right;
  width: 140px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 20%;
  height: auto;
}

div.desc {
  padding: 10px;
  text-align: center;
  color : black;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



.button2 {
	background-color: #008CBA;
	border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
} /* Blue */

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333;
   color: white;
   text-align: center;
}

</style>

</head>
<body>

<ul>
  <li><a style="font-family:Berlin Sans FB">Tanggal : <input type="text" name="tgl_berangkat" value="<?php echo $_POST['tgl_berangkat']?>"readonly="readonly" /></a></li>
  <li><a style="font-family:Berlin Sans FB">Tujuan : <input type="text" name="jurusan" value="<?php echo $_POST['jurusan']?>"readonly="readonly" /></a></li>
  <li><a href="indexuser.php"><button class="button button2" id="button" value="Balik"><font face="Berlin Sans FB" color="white">Kembali</button></a></li>
</ul>

<br>
	<!--Kursi-->
	<div align="center">
<div class="gallery">
  <a target="_blank" href="seat-booked.png">
    <img src="seat-booked.png" alt="Kursi Terpesan" width="5" height="5">
  </a>
  <div class="desc">Kursi sudah dipesan</div>
</div>

<div class="gallery">
  <a target="_blank" href="seat-empty.png">
    <img src="seat-empty.png" alt="Forest" width="5" height="5">
  </a>
  <div class="desc">Kursi belum dipesan</div>
</div>
</div>

	<br>

	<div align="center">
 <form method="post" action="">
  		<h3><font face="Arial" color="black">Kursi</h3>
<input type="hidden" name="tgl_berangkat" value="<?php echo $_POST['tgl_berangkat']?>" />
<input type="hidden" name="id_jurusan" value="<?php echo $_POST['id_jurusan']?>"/>
 </form>
 <div class="wrapper" >
<table>

<td>
         A1 
         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='1';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>
 <tr><h1>
	<td>
         B1 
         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='2';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>
<td> 
		B2

         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='3';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>
<td> 
		B3

         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='4';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>
</tr>

<tr><h1>
	<td>
         C1 
         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='5';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>
<td> 
		C2

         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='6';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>
<td> 
		C3

         <?php
		 
		 
		 $jurusan=$_POST['id_jurusan'];
		 $tgl=$_POST['tgl_berangkat'];
         $kursi='7';
	$query = mysqli_query($conn,"SELECT * FROM pesanan WHERE id_jurusan='$jurusan' AND id_kursi='$kursi' AND tgl_berangkat='$tgl' ");
	$count = mysqli_num_rows($query);
		if($count > 0 ){
			echo '<img src="seat-booked.png" height="100px">';
		}else{
			
			echo '<img src="seat-empty.png" height="100px">';
		}
	
		 
?> 
</td>

</tr>

</tr>


</table>
	</div>
	<div class="footer">
  <p>Lansa Trans</p>
</div>
</body>
</html>