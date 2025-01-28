<?php 
// koneksi database
include 'connect.php';

// menangkap data yang di kirim dari form
$NamaBuku = $_POST['NamaBuku'];
$ISBN = $_POST['ISBN'];
$GAMBAR = $_FILES['Gambar']['name'];
$Genre = $_POST['Genre'];

if($GAMBAR != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $GAMBAR);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['Gambar']['tmp_name'];
    $angka_acak = rand(1, 999);
    $newfile = $angka_acak . '-' . $GAMBAR;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'img/' . $newfile);
        $GAMBAR = $newfile;
    } else {
        echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='anggota.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Silakan upload gambar terlebih dahulu!');window.location='anggota.php';</script>";
    exit;
}

$query = "INSERT INTO buku (Nama_Buku, ISBN, Gambar, Genre) VALUES ('$NamaBuku', '$ISBN', '$GAMBAR', '$Genre')";
$result = mysqli_query($koneksi, $query);
if(!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='anggota.php';</script>";
}
?>