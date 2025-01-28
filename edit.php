<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
</head>
<body>
 
	<h2>CRUD DATA BUKU</h2>
	<br/>
	<a href="anggota.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BUKU</h3>
 
	<?php
	include 'connect.php';
	$Id = $_GET['Id'];
	$data = mysqli_query($koneksi,"SELECT * from buku where Id='$Id'");
	while($d = mysqli_fetch_array($data)){
		?>
		
		<form method="POST" action="update.php">
    <input type="hidden" name="Id" value="<?php echo $d['Id']; ?>">
    <table>
        <tr>			
            <td>Nama Buku</td>
            <td><input type="text" name="NamaBuku" value="<?php echo $d['Nama_Buku']; ?>"></td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td><input type="number" name="ISBN" value="<?php echo $d['ISBN']; ?>"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td><input type="text" name="Genre" value="<?php echo $d['Genre']; ?>"></td>
        </tr>
        <tr>
            <td>Cover</td>
            <td><input type="file" name="GAMBAR" accept="image/"<?php echo $d['Gambar']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>		
    </table>
</form>
		<?php
	}
	?>
 
</body>
</html>

