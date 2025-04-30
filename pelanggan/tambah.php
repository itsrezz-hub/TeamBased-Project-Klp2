<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pelanggan</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Pelanggan</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <form method="post" action="tambah_aksi.php">
            <div class="form-group">
                <label>ID Pelanggan</label>
                <input type="text" name="id_pelanggan">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat">
            </div>
            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telepon">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>
