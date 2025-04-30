<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Pelanggan</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit_aksi.php">
                <input type="hidden" name="id_pelanggan_lama" value="<?php echo $d['id_pelanggan']; ?>">
                <div class="form-group">
                    <label>ID Pelanggan</label>
                    <input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telepon" value="<?php echo $d['no_telepon']; ?>">
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
