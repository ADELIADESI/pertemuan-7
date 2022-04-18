<?php
/**
 * 1. buka koneksi ke DBMS MYSQL dan buka database mahasiswa 
 * 2. buat query untuk delete data
 * 3. execute query
 * 4. 
 *//
    
    include_once("koneksidb.php");
    $nim = "233333";
    $sql = "DELETE FROM mhs WHERE nim='$nim';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }