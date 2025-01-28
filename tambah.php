<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>CRUD DATA BUKU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BUKU</h3>
	<form method="POST" action="tambah_aksi.php" enctype="multipart/form-data">>
		<table>
			<tr>			
				<td>Nama Buku</td>
				<td><input type="text" name="NamaBuku"></td>
			</tr>
			<tr>
				<td>
					ISBN
				</td>
				
				<td><input type="number" name="ISBN"></td>
				
			</tr>
			<tr>
				<td>Genre</td>
				<td><input type="text" name="Genre"></td>
			</tr>
			<tr>
				<td>Cover</td>
				<td><input type="file" name="Gambar" accept="image/"></td>
			</tr>
            <tr>
				<td>SIMPAN</td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	
		</table>
</body>
</html>