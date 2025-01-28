<?php 
// koneksi database
include 'connect.php';

// menangkap data id yang di kirim dari url
$Id = $_GET['Id'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE from buku where Id='$Id'");

// mengalihkan halaman kembali ke index.php
header("location:anggota.php");

?>