<?php
require 'config.php';


//APAKAH TOMBOL SUBMIT SUDAH DITEKAN APA BELUM 
if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen form
    

    

    //cek data berhasil ditambah apa gak
    if( tambahkan ($_POST) > 0 ) {
       echo "
       Berhasil menambahkan driver, silahkan <a href='daftardriver.php'>lihat</a> disini";
            
    }else {
        echo "
        Maaf tambah driver gagal, mohon coba lagi"; 
    }

} 


?>