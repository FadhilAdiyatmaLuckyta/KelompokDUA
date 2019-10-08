<?php
$email= $_POST['email'];
$password=$_POST['password'];
$DB_NAME = 'lansa_trans';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM tb_user WHERE email='$email' and password='$password'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
header("Location: index2.html");
}
else {
echo 'email/password yang anda masukkan salah. Silahkan ulang kembali';	
}
?>