
<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="css_daftar.css">
</head>

<body>
    
    <br/><br/>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>
    <form action="filetambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" class="form_login" name="nama_user"></td>
            </tr>
            <tr> 
                <td>Telp</td>
                <td><input type="text" class="form_login" name="telp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" class="form_login" name="alamat"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" class="form_login" name="email"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" class="form_login" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" class="tombol_login" value="Daftar"> </td> 
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_user = $_POST['nama_user'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_user(nama_user,telp,alamat,email,password) VALUES('$nama_user','$telp','$alamat','$email','$password')");

        // Show message when user added
        echo "Selamat anda telah mendaftar, silahkan <a href='login.php'>login</a> kembali";
    }
    ?>
</body>
</html>