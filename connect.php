<?php

//Koneksi Untuk Menyambungkan Database
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan";

//Memberi Alamat Koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

//Cek Koneksi
if(mysqli_connect_errno()){
    echo "Koneksi ke Database tidak terjalin".mysqli_connect_error();
}
 




?>