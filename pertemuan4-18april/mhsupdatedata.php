<?php
/**
 * 1. Buka Koneksi ke DBMS dan buka database mahasiswa
 * 2. buat query untuk update data
 * 3. excute query
 * 4. cek status
 * 5. close koneksi
 */
include_once("koneksidb.php");
$sql = "UPDATE tbl SET NAMA ='namabaru' WHERE NIM='nim';";
$hsl = mysqli_query($cnn,$sql);

if($hsl){
    echo"pengubahan data sukses<br>";
}else{
    echo "Terjadi masalah saat mengubah data<br>";

}
mysqli_close($cnn);