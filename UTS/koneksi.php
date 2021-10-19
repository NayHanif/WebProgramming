<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "porto-web";

//Membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDatabase);

//Cek Koneksi
if (!$conn){
    die("Koneksi Gagal".mysqli_connect_error());
}

?>