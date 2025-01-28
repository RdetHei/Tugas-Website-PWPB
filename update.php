<?php
include 'connect.php';
$Id = $_POST['Id']; 
$NamaBuku = $_POST['Nama_Buku'];
$ISBN = $_POST['ISBN'];
$GAMBAR = $_FILES['Gambar']['name'];
$Genre = $_POST['Genre'];
mysqli_query($koneksi, "UPDATE buku set Nama_Buku='$NamaBuku', ISBN='$ISBN',Gambar='$Gambar', Genre='$Genre' where Id='$Id'");
header("location:anggota.php"); 

// Menangani pengunggahan gambar
if ($_FILES['Gambar']['name']) {
    // Jika gambar baru diunggah
    $GAMBAR = $_FILES['Gambar']['name'];
    $gambarTmp = $_FILES['Gambar']['tmp_name'];
    $gambarPath = 'img/' . $GAMBAR;

    // Pindahkan gambar ke folder 'images'
    move_uploaded_file($gambarTmp, $gambarPath);

    // Query untuk update data termasuk gambar baru
    $query = "UPDATE buku SET Nama_Buku = '$NamaBuku', Genre = '$Genre', Gambar = '$GAMBAR' WHERE Id = '$Id'";
} else {
    // Jika gambar tidak diubah, tetap gunakan gambar yang lama
    $query = "UPDATE buku SET Nama_Buku = '$NamaBuku', Genre = '$Genre' WHERE Id = '$Id'";
}

// Eksekusi query update
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil diperbarui!";
    header("Location: anggota.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>

?>