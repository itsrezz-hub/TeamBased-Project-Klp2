<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Produk</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Produk</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit_aksi.php">
                <input type="hidden" name="id_produk_lama" value="<?php echo $d['id_produk']; ?>">
                <div class="form-group">
                    <label>ID Produk</label>
                    <input type="text" name="id_produk" value="<?php echo $d['id_produk']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" value="<?php echo $d['kategori']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" value="<?php echo $d['harga']; ?>">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" value="<?php echo $d['stok']; ?>">
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
