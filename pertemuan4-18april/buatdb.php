<?php
/*
untuk membuat database
1. koneksi ke server mysql
2. buat sql untuk menciptakan database
    CREATE DATABASE namadb;
3. Execute/jalankan instruksi pembuatan database
4. Check status
*/
include_once("koneksidb.php");
$sql = "CREATE DATABASE mahasiswa;";
$hasil = mysqli_query($cnn,$sql);
if($hasil){
    echo "Pembuatan database sukses";
}else{
    echo "Terjadi kesalahan dalam pembuatan database";
}
mysqli_close($cnn);
