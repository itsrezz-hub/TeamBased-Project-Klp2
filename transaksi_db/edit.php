<?php
include 'config.php';

$id_transaksi = $_GET['id'];
$id_produk = $_GET['prod'];

$sql = "SELECT * FROM detail_transaksi WHERE Id_transaksi='$id_transaksi' AND Id_produk='$id_produk'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Ambil data topping dari database
$toppings = $conn->query("SELECT * FROM topping");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaksi</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 150px; }
        input, select { padding: 5px; width: 200px; }
        .btn { padding: 5px 10px; text-decoration: none; }
        .btn-update { background: #2196F3; color: white; }
        .btn-cancel { background: #ccc; color: black; }
    </style>
</head>
<body>
    <h1>Edit Transaksi</h1>
    
    <form action="update.php" method="post">
        <input type="hidden" name="original_id_transaksi" value="<?php echo $row['Id_transaksi']; ?>">
        <input type="hidden" name="original_id_produk" value="<?php echo $row['Id_produk']; ?>">
        
        <div class="form-group">
                <label>Transaksi:</label>
                <select name="id_transaksi" required>
                    <option value="">-- Pilih Transaksi --</option>
                    <?php
                    $transaksi = $conn->query("SELECT id_transaksi FROM transaksi");
                    while($trx = $transaksi->fetch_assoc()) {
                        echo "<option value='".$trx['id_transaksi']."'>".$trx['id_transaksi']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Produk:</label>
                <select name="id_produk" id="produkSelect" required>
                    <option value="">-- Pilih Produk --</option>
                    <?php
                    $produk = $conn->query("SELECT Id_produk, nama_produk, harga FROM produk");
                    while($prod = $produk->fetch_assoc()) {
                        echo "<option value='".$prod['Id_produk']."' data-harga='".$prod['harga']."'>".$prod['Id_produk']." - ".$prod['nama_produk']." (Rp ".number_format($prod['harga'],0,',','.').")</option>";
                    }
                    ?>
                </select>
            </div>
        <div class="form-group">
            <label>Ukuran:</label>
            <select name="id_ukuran" required>
                <option value="S" <?php if($row['Id_ukuran'] == 'S') echo 'selected'; ?>>Small</option>
                <option value="M" <?php if($row['Id_ukuran'] == 'M') echo 'selected'; ?>>Medium</option>
                <option value="L" <?php if($row['Id_ukuran'] == 'L') echo 'selected'; ?>>Large</option>
            </select>
        </div>
        <div class="form-group">
            <label>Topping:</label>
            <select name="id_topping">
                <option value="">-- Tidak ada topping --</option>
                <?php while($top = $toppings->fetch_assoc()) { 
                    $selected = ($row['Id_topping'] == $top['Id_topping']) ? 'selected' : '';
                    echo "<option value='".$top['Id_topping']."' $selected>".$top['Id_topping']."</option>";
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah:</label>
            <input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>" required>
        </div>
        <div class="form-group">
            <label>Subtotal:</label>
            <input type="number" name="subtotal" value="<?php echo $row['subtotal']; ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Update" class="btn btn-update">
            <a href="index.php" class="btn btn-cancel">Batal</a>
        </div>
    </form>
</body>
</html>