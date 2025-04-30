<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Karyawan</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <form method="post" action="tambah_aksi.php">
            <div class="form-group">
                <label>ID Karyawan</label>
                <input type="text" name="id_karyawan">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>
