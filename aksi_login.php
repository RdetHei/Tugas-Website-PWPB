<?php
session_start();
include 'connect.php';

$username = $_POST['Username'];
$password = $_POST['Password'];
$data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
  header("location:anggota.php");
}else{
    header("location:anggota.php");
}
?>