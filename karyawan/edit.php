<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Karyawan</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Karyawan</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id_karyawan='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit_aksi.php">
                <input type="hidden" name="id_karyawan_lama" value="<?php echo $d['id_karyawan']; ?>">
                <div class="form-group">
                    <label>ID Karyawan</label>
                    <input type="text" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>">
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
