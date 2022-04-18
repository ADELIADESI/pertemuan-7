<?php

/*  1. Buka koneksi ke DBMS MySQL dan buka database mahasiswa
    2. Buat Query untuk insert data ke tabel mhs
    3. Excute query insert data 
    4. Tutup koneksi 
*/

    include_once ("koneksidb.php");
    $nim ="911";
    $nama = "ohoho";
    $jur = "dgm";
    $jk = "p";
    $talag = "2002-12-12";
    $pascode = "hhh3";
   

    $sql = "INSERT INTO mhs(NIM,NAMA,JURUSAN,JENISKELAMIN,TANGGALLAHIR,PASCODE) VALUES ('$nim','$nama','$jur','$jk','$talag','$pascode');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }