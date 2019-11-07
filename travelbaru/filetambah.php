
<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="css_daftar.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script language="javascript">
        jQuery(document).ready(function()
        {
            jQuery("#setuju").click(function(){
                if(jQuery("#button").is(":enabled"))
            {
                jQuery("#button").prop("disabled",true);
            }
            else
            {
                jQuery("#button").prop("disabled",false);
            }
        });
        }
        );
        </script>





</head>

<body>
    
    <br/><br/>
    <div class ="kotaklogin">
	<p class="tulisan_login">Silahkan Daftar</p>
    <form action="filetambah.php" method="post" name="form1" onSubmit="validasi()">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text"  class="form_login" id ="nama" name="nama" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Tempat Lahir</td>
                <td><input type="text"  class="form_login" id="tmpt" name="tempat_lahir" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Tanggal Lahir</td>
                <td><input type="date"  class="form_login" id="tgl" name="tanggal_lahir" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jekel"
                    <?php if (isset($jekel) && $jekel=="Perempuan") echo "checked";?>
                        value="Perempuan">Perempuan
                    <input type="radio" name="jekel"
                    <?php if (isset($jekel) && $jekel=="Laki-laki") echo "checked";?>
                    value="Laki-laki">Laki-laki</td>
            </tr>
            <tr> 
                <td>ID</td>
                <td><select name="tipe_id">
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="Paspor">Paspor</option>
                   
                </select></td>
            </tr>
            <tr> 
                <td>Nomer ID</td>
                <td><input type="text"  class="form_login" id="tgl" name="nomer_id" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Telepon</td>
                <td><input type="text"  class="form_login" id="telepon" name="telepon" autocomplete="off"  required></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text"  class="form_login" id="alamat" name="alamat" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text"  class="form_login" id="username" name="username" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password"  class="form_login" id="password" name="password" autocomplete="off" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="checkbox" name="level" id="setuju" class="ok" required
                <?php if (isset($level) && $level=="pengguna") echo "checked";?>
                value="pengguna">Saya Pengguna Baru</td>
            </tr>
            <tr> 
            
                <td></td>
				<td><input type="submit" name= "Submit"  id="button" class="tombol_login" value="Button" disabled></td>
            </tr>
        </table>
        
    </form>
            
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        $nama= $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jekel = $_POST['jekel'];
        $tipe_id = $_POST['tipe_id'];
        $nomer_id = $_POST['nomer_id'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password) ;
        $level = $_POST['level'];


        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(id_user,nama,tempat_lahir,tanggal_lahir,jekel,tipe_id,nomer_id,telepon,alamat,username,password,level) VALUES('id_user','$nama','$tempat_lahir','$tanggal_lahir','$jekel','$tipe_id','$nomer_id','$telepon','$alamat','$username','$password','$level')");

        // Show message when user added
        echo "Selamat anda telah mendaftar, silahkan <a href='login.php'>login</a> kembali";

        
    
    
    }
    ?>
    
    
   

    
</body>
</html>