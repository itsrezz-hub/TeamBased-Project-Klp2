<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Ukuran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Ukuran</h1>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
        <br><br>
        <form method="post" action="tambah_aksi.php">
            <div class="form-group">
                <label>ID Ukuran</label>
                <input type="text" class="form-control" name="Id_ukuran">
            </div>
            <div class="form-group">
                <label>Nama Ukuran</label>
                <input type="text" class="form-control" name="Nama_ukuran">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>