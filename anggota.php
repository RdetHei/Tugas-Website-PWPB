<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
  <style>
    html, body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    body {
      background-image: url('img/cica.jpg');
      color: rgb(255, 255, 255);
      margin: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      background-color: rgba(0, 0, 0, 0.5);
      background-blend-mode: darken;
      min-height: 100%;
    }
    h1, h3 {
      text-align: center;
    }
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .book-card {
      border: 1px solid #ddd;
      border-radius: 5px;
      margin: 10px;
      padding: 15px;
      width: 250px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      background-color: rgb(0, 0, 0);
      color: whitesmoke;
      transition: transform 0.3s;
    }
    .book-card:hover {
      transform: scale(1.05);
    }
    .book-card img {
      width: 100%;
      max-width: 4in;
      max-height: 6in;
      object-fit: cover;
      height: auto;
      border-radius: 5px;
    }
    .book-card h5 {
      margin: 10px 0;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #333;
    }
    .logo {
      color: #fff;
      font-size: 24px;
    }
    .navigation {
      display: flex;
      align-items: center;
    }
    .btnlogin-popup {
      background-color: #ff4757;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      margin-right: 10px;
    }
    .modal-content {
      background-color: #333;
      color: #fff;
    }
    .modal-header {
      background-color: #ff4757;
      color: #fff;
    }
    .modal-footer {
      background-color: #444;
    }
    .btn-close {
      background-color: #ff4757;
      border: none;
    }
    .content {
      flex: 1;
    }
    footer {
      text-align: center;
      padding: 10px;
      background-color: #333;
      color: #fff;
      margin-top: auto;
    }
    .floating-image {
      position: absolute;
      width: 100px;
      height: 100px;
      background-image: url('img/floating.png');
      background-size: cover;
      animation: float 10s infinite;
    }
    @keyframes float {
      0% { transform: translate(0, 0); }
      50% { transform: translate(100px, 100px); }
      100% { transform: translate(0, 0); }
    }
    .animated-text {
      animation: move 5s infinite, shine 2s infinite;
    }
    @keyframes move {
      0% { transform: translateX(0); }
      50% { transform: translateX(25px); }
      100% { transform: translateX(0); }
    }
    @keyframes shine {
      0% { text-shadow: 0 0 10px #fff; }
      50% { text-shadow: 0 0 20px rgb(233, 109, 0); }
      100% { text-shadow: 0 0 10px #fff; }
    }
  </style>
  <title>Data</title>
</head>
<body>
  <header>
    <h2 class="logo">R&R</h2>
    <nav class="navigation">
      <button class="btnlogin-popup" id="loginButton" onclick="window.location.href='index.php'">Logout</button>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltambah">TAMBAH BUKU</button>
    </nav>
  </header>

  <div class="container content">
    <h1 class="animated-text" style="margin-top: 20px;">SELAMAT DATANG ADMIN!</h1>
    <h3>Ini merupakan data Buku yang tersedia</h3>
    <div class="container">
      <form method="GET" action="anggota.php">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Buku" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </form>
    </div>
    <div class="card-container">
      <?php 
      include 'connect.php';
      if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($koneksi, $_GET['search']);
        $query = "SELECT * FROM buku WHERE Nama_Buku LIKE '%$search%' OR ISBN LIKE '%$search%' OR Genre LIKE '%$search%'";
      } else {
        $query = "SELECT * FROM buku";
      }
      $data = mysqli_query($koneksi, $query);
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <div class="book-card">
        <?php if ($d['Gambar']) { ?>
          <img src="img/<?php echo htmlspecialchars($d['Gambar']); ?>" alt="Cover Book" onerror="this.onerror=null; this.src='img/';">
        <?php } else { ?>
          Tidak ada gambar
        <?php } ?>
        <h5><?php echo $d['Nama_Buku']; ?></h5>
        <p>ISBN: <?php echo $d['ISBN']; ?></p>
        <p>Genre: <?php echo $d['Genre']; ?></p>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalubah<?= $d['Id'] ?>" href="anggota.php?hal=edit&Id=<?php echo $d['Id']; ?>" role="button">EDIT</a>
        <a class="btn btn-danger" href="hapus.php?Id=<?php echo $d['Id']; ?>" onclick="return confirm('Yakin kah?');">HAPUS</a>
      </div>
      <div class="modal fade modal-lg" id="modalubah<?= $d['Id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">FORM UBAH DATA BUKU</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Denied"></button>
            </div>
            <form method="POST" action="update.php" enctype="multipart/form-data">
              <input type="hidden" name="Id" value="<?= $d['Id'] ?>">
              <div class="modal-body">
                <div class="row mb-3">
                  <label for="NamaBuku" class="col-sm-2 col-form-label">Nama Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="NamaBuku" name="Nama_Buku" value="<?= $d['Nama_Buku'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="ISBN" class="col-sm-2 col-form-label">ISBN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ISBN" name="ISBN" value="<?= $d['ISBN'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Genre" class="col-sm-2 col-form-label">Genre</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="Genre" name="Genre" rows="3"><?= $d['Genre'] ?></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Gambar" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="Gambar" name="Gambar">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BATALKAN</button>
                <button type="submit" class="btn btn-primary" name="SIMPAN">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
    </div>
  </div>

  <div class="modal fade modal-lg" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">FORM TAMBAH DATA BUKU</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Denied"></button>
        </div>
        <form method="POST" action="tambah_aksi.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row mb-3">
              <label for="NamaBuku" class="col-sm-2 col-form-label">Nama Buku</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="NamaBuku" name="NamaBuku">
              </div>
            </div>
            <div class="row mb-3">
              <label for="ISBN" class="col-sm-2 col-form-label">ISBN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="ISBN" name="ISBN">
              </div>
            </div>
            <div class="row mb-3">
              <label for="Genre" class="col-sm-2 col-form-label">Genre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Genre" name="Genre">
              </div>
            </div>
            <div class="row mb-3">
              <label for="Gambar" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="Gambar" name="Gambar">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">HAPUS</button>
            <button type="submit" class="btn btn-primary" name="SIMPAN">SIMPAN</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="floating-image"></div>

  <footer>
    &copy; <?php echo date("Y"); ?> R&R. All rights reserved.
  </footer>
</body>
</html>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const leafContainer = document.createElement('div');
    leafContainer.style.position = 'fixed';
    leafContainer.style.top = '0';
    leafContainer.style.left = '0';
    leafContainer.style.width = '100%';
    leafContainer.style.height = '100%';
    leafContainer.style.pointerEvents = 'none';
    document.body.appendChild(leafContainer);

    function createLeaf() {
      const leaf = document.createElement('div');
      leaf.style.position = 'absolute';
      leaf.style.width = '20px';
      leaf.style.height = '20px';
      leaf.style.backgroundImage = 'url("img/leaf.png")';
      leaf.style.backgroundSize = 'cover';
      leaf.style.top = '-20px';
      leaf.style.left = Math.random() * 100 + 'vw';
      leaf.style.opacity = Math.random();
      leaf.style.transform = `rotate(${Math.random() * 360}deg)`;
      leaf.style.animation = `fall ${Math.random() * 5 + 5}s linear infinite`;

      leafContainer.appendChild(leaf);

      leaf.addEventListener('animationend', function() {
        leafContainer.removeChild(leaf);
      });
    }

    setInterval(createLeaf, 500);

    const style = document.createElement('style');
    style.innerHTML = `
      @keyframes fall {
        to {
          transform: translateY(100vh) rotate(${Math.random() * 360}deg);
        }
      }
    `;
    document.head.appendChild(style);
  });
</script>