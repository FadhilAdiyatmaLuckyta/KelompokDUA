<?php
include 'config.php';

?>

<html>
<head>
 <title>HASIL KURSI</title>
</head>
<body>
 <form method="post" action="">
  
  
  
  <input type="submit" name="submit" value="lanjut pesan"/>


		
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
</body>
</html>