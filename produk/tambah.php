<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Produk</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Produk</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <form method="post" action="tambah_aksi.php">
            <div class="form-group">
                <label>ID Produk</label>
                <input type="text" name="id_produk">
            </div>
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>
