<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Topping</title>
    <link rel="stylesheet" href="../assets/css/theme_updated.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Topping</h1>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM topping WHERE Id_topping='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit_aksi.php">
                <input type="hidden" name="Id_topping_lama" value="<?php echo $d['Id_topping']; ?>">
                <div class="form-group">
                    <label>ID Topping</label>
                    <input type="text" name="Id_topping" value="<?php echo $d['Id_topping']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Topping</label>
                    <input type="text" name="Nama_topping" value="<?php echo $d['Nama_topping']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" value="<?php echo $d['harga']; ?>">
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
