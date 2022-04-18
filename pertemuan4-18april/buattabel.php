<?php
/*
1. buat koneksi ke server 
2. buat script sql untuk menciptakan tabel 
    tabel:mhs
    field: NIM Char, NAMA STRING, JURUSAN STRING, PASCODE STRING
3. execute script 
4. cek status 
 */
include_once("koneksidb.php");
$sql = "CREATE TABLE mhs(
NIM VARCHAR(8) PRIMARY KEY,
NAMA VARCHAR(50),
JURUSAN VARCHAR (20),
PASCODE VARCHAR (10),
JENISKELAMIN VARCHAR (2),
TANGGALLAHIR VARCHAR (20),
);";
$hasil= mysqli_query($cnn,$sql);
if($hasil){
    echo "pembuatan tabel sukses";
}else{
    echo "pembuatan tabel gagal";
}