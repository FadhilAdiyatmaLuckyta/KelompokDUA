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
?>