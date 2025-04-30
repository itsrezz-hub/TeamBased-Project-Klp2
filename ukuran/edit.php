<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Ukuran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Ukuran</h1>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
        <br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM ukuran WHERE Id_ukuran='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit_aksi.php">
                <input type="hidden" name="Id_ukuran_lama" value="<?php echo $d['Id_ukuran']; ?>">
                <div class="form-group">
                    <label>ID Ukuran</label>
                    <input type="text" class="form-control" name="Id_ukuran" value="<?php echo $d['Id_ukuran']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Ukuran</label>
                    <input type="text" class="form-control" name="Nama_ukuran" value="<?php echo $d['Nama_ukuran']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <?php
        }
        ?>
    </div>
</body>
</html>