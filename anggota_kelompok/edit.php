<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota Kelompok</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Anggota Kelompok</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <?php
        include 'koneksi.php'; // Sesuaikan path ke koneksi.php
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi,"SELECT * FROM anggota_kelompok WHERE nim='$nim'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit_aksi.php">
                <input type="hidden" name="nim_lama" value="<?php echo $d['nim']; ?>">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" value="<?php echo $d['nim']; ?>">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <?php
        }
        ?>
    </div>
    <footer>Copyright 2025, Kelompok 2</footer>
</body>
</html>
