<?php
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bismillahyaallah");

function query ($query) {

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
        
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama= htmlspecialchars($_POST["nama"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $jekel = htmlspecialchars($_POST["jekel"]);
    $nomer_id = htmlspecialchars($_POST["nomer_id"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = md5($password) ;
    $level = htmlspecialchars($_POST["level"]);



    //CEK NO ID APAKAH SUDAH ADA APA BELOM
    $result = mysqli_query($conn, "SELECT nomer_id FROM users WHERE nomer_id='$nomer_id'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert ('Nomer ID telah terdaftar')
            </script>";
        return false;
    }

   //CEK TELEPON APAKAH SUDAH ADA APA BELOM
   $result2 = mysqli_query($conn, "SELECT telepon FROM users WHERE telepon='$telepon'");

   if( mysqli_fetch_assoc($result2) ) {
       echo "<script>
           alert ('Nomer telepon telah terdaftar')
           </script>";
       return false;
    }

    //CEK EMAIL SUDAH ADA APA BELOM
    $result3 = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");

    if( mysqli_fetch_assoc($result3) ) {
        echo "<script>
            alert ('Email telah terdaftar')
            </script>";
        return false;
    }

        //CEK USERNAME APAKAH SUDAH ADA APA BELOM
    $result4 = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");

    if( mysqli_fetch_assoc($result4) ) {
        echo "<script>
            alert ('Username telah terdaftar')
            </script>";
        return false;

    }
    
   
   
    
    
    

    

    //query insert data
    $query = "INSERT INTO users
               VALUES
               ('', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jekel', '$nomer_id', '$telepon', '$alamat', '$email', '$username', '$password', '$level')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id_user) {
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id_user= $id_user");

    return mysqli_affected_rows($conn);
}

function ubah ($data) {
    global $conn;
    $user = $data["id_user"];
    $nama= htmlspecialchars($_POST["nama"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $jekel = htmlspecialchars($_POST["jekel"]);
    $nomer_id = htmlspecialchars($_POST["nomer_id"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = md5($password) ;
    $level = htmlspecialchars($_POST["level"]);

    //query ubah data
    $query = "UPDATE users SET
                nama = '$nama',
                tempat_lahir = '$tempat_lahir',
                tanggal_lahir = '$tanggal_lahir',
                jekel = '$jekel',
                nomer_id = '$nomer_id',
                telepon = '$telepon',
                alamat = '$alamat',
                email = '$email',
                username = '$username',
                password = '$password'
                WHERE id_user = $user
            ";

    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM users
                WHERE
                nama LIKE '$keyword%' OR
                tempat_lahir LIKE '$keyword%' OR
                nomer_id LIKE '$keyword%' OR
                telepon LIKE '$keyword%' OR
                email LIKE '$keyword%' OR
                username LIKE '$keyword%' OR
                level LIKE '$keyword%' OR
                alamat LIKE '$keyword%' 
            ";
    return query($query);
}
//INI FUNCTION PUNYA DRIVERS YA....
function tambahkan($data) {
    global $conn;
    $nama_driver= htmlspecialchars($_POST["nama_driver"]);
    $tempat_lahirdriver = htmlspecialchars($_POST["tempat_lahirdriver"]);
    $tanggal_lahirdriver = htmlspecialchars($_POST["tanggal_lahirdriver"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $no_sim = htmlspecialchars($_POST["no_sim"]);
    $telp = htmlspecialchars($_POST["telp"]);
    $alamat_driver = htmlspecialchars($_POST["alamat_driver"]);

    //CEK NO TELP APAKAH SUDAH ADA APA BELOM
    $result = mysqli_query($conn, "SELECT telp FROM drivers WHERE telp='$telp'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert ('Nomer telepon telah terdaftar')
            </script>";
        return false;
    }

    //CEK NO SIM APAKAH SUDAH ADA APA BELOM
    $result2 = mysqli_query($conn, "SELECT no_sim FROM drivers WHERE no_sim='$no_sim'");

    if( mysqli_fetch_assoc($result2) ) {
        echo "<script>
            alert ('Nomer SIM telah terdaftar')
            </script>";
        return false;
    }

    //query insert data
    $query = "INSERT INTO drivers
               VALUES
               ('', '$nama_driver', '$tempat_lahirdriver', '$tanggal_lahirdriver', '$jenis_kelamin', '$no_sim', '$telp', '$alamat_driver')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function ubahdriver($data) {
    global $conn;
    $driver =$data["id_driver"];
    $nama_driver = htmlspecialchars($data["nama_driver"]);
    $tempat_lahirdriver = htmlspecialchars($data["tempat_lahirdriver"]);
    $tanggal_lahirdriver = htmlspecialchars($data["tanggal_lahirdriver"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $no_sim = htmlspecialchars($data["no_sim"]);
    $telp = htmlspecialchars($data["telp"]);
    $alamat_driver = htmlspecialchars($data["alamat_driver"]);

    //query ubahdriver 
    $query = "UPDATE drivers SET
                nama_driver = '$nama_driver',
                tempat_lahirdriver = '$tempat_lahirdriver',
                tanggal_lahirdriver = '$tanggal_lahirdriver',
                jenis_kelamin = '$jenis_kelamin',
                no_sim = '$no_sim',
                telp = '$telp',
                alamat_driver = '$alamat_driver',
                WHERE id_driver = $driver
                ";
}


function havus ($id_driver) {
    global $conn;
    mysqli_query($conn, "DELETE FROM drivers WHERE id_driver= $id_driver");

    return mysqli_affected_rows($conn);
}
function carii($keyword) {
    $query = "SELECT * FROM drivers
                WHERE
                nama_driver LIKE '$keyword%' OR
                tempat_lahirdriver LIKE '$keyword%' OR
                no_sim LIKE '$keyword%' OR
                telp LIKE '$keyword%' OR
                alamat_driver LIKE '$keyword%' 
            ";
    return query($query);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function nambah($data) {
    global $conn;
    $merk= htmlspecialchars($data["merk"]);
    $warna = htmlspecialchars($data["warna"]);
    $nopol = htmlspecialchars($data["nopol"]);
    $kursi = htmlspecialchars($data["kursi"]);
    
    //upload foto
    
    $gambar = upload(); 
    if( !$gambar ) {
        return false;
    }
   
    //query insert data
    $query = "INSERT INTO cars
                VALUES
                ('', '$merk', '$warna', '$nopol', '$kursi', '$gambar')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

   
}

function upload() {
    $namaFile= $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    

    //cek apakah gak ada gambar yg diupload
    if( $error === 4 ) {
        echo "<script>
        alert('pilih foto dulu');
        </script>";
        return false;
    }

   
    //cek apa benar yg diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
    echo "<script>
        alert('yang kamu upload bukan gambar sayang!');
        </script>";
        return false;
    }

    // cek ukuran gambar
    if( $ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }
    //siap diupload
    move_uploaded_file($tmpName,"img/".$namaFile);

    return $namaFile;
}
function kirim($data) {
    global $conn;
    $pengirim= htmlspecialchars($_POST["pengirim"]);
    $email = htmlspecialchars($_POST["email"]);
    $no_telp = htmlspecialchars($_POST["no_telp"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
    $tgl_contact = date("Y-m-d H:i:s");
    

     //query insert data
     $query = "INSERT INTO contact_us
     VALUES
     ('', '$pengirim', '$email', '$no_telp', '$pesan', '$tgl_contact')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

?>