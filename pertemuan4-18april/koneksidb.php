<?php
include_once("konfigurasi.php");
//server: localhost (127.0.0.1)
//user: root
//password:''

//prosedural
$cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT)
or die("Terjadi kesalahan saat koneksi ke database");
 echo "koneksi database sukses";
 

 //metode OOP
/*
$cn = new mysqli("127.0.0.1","root","");

if ($cn ->connect_eror){
    die("Terjadi kesalahan saat koneksi ke database");
}

echo "koneksi database sukses";
*/