<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Topping</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Topping</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <form method="post" action="tambah_aksi.php">
            <div class="form-group">
                <label>ID Topping</label>
                <input type="text" name="Id_topping">
            </div>
            <div class="form-group">
                <label>Nama Topping</label>
                <input type="text" name="Nama_topping">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>
