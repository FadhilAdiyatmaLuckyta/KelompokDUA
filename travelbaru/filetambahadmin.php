
<html>
<head>
    <title>Add Admin</title>
</head>

<body>
    <a href="formtambahadmin.php">Go to Home</a>
    <br/><br/>

    <form action="filetambahadmin.php" method="post" name="form1">
        <table width="25%" border="0">
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_admin"></td>
            </tr>
            <tr> 
                <td>Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_admin = $_POST['nama_admin'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_admin(nama_admin,telp,alamat,username,password) VALUES('$nama_admin','$telp','$alamat','$username','$password')");

        // Show message when user added
        echo "Admin added successfully. <a href='formtambahadmin.php'>Lihat</a>";
    }
    ?>
</body>
</html>