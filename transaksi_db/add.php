<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 150px; }
        select, input { padding: 8px; width: 300px; font-size: 14px; }
        .btn { padding: 10px 15px; text-decoration: none; border-radius: 4px; cursor: pointer; }
        .btn-save { background: #4CAF50; color: white; border: none; }
        .btn-cancel { background: #ccc; color: black; }
        .form-container { max-width: 600px; margin: 0 auto; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Tambah Transaksi Baru</h1>
        
        <form action="save.php" method="post">
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
                <select name="id_ukuran" id="ukuranSelect" required>
                    <option value="">-- Pilih Ukuran --</option>
                    <option value="S">Small (+Rp 0)</option>
                    <option value="M">Medium (+Rp 3,000)</option>
                    <option value="L">Large (+Rp 5,000)</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Topping:</label>
                <select name="id_topping" id="toppingSelect">
                    <option value="">-- Tidak ada topping --</option>
                    <?php
                    $topping = $conn->query("SELECT Id_topping, nama_topping, harga FROM topping");
                    while($top = $topping->fetch_assoc()) {
                        echo "<option value='".$top['Id_topping']."' data-harga='".$top['harga']."'>".$top['Id_topping']." - ".$top['nama_topping']." (+Rp ".number_format($top['harga'],0,',','.').")</option>";
                    }
                    ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" min="1" value="1" required>
            </div>
            
            <div class="form-group">
                <label>Subtotal:</label>
                <input type="number" name="subtotal" id="subtotal" readonly>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-save">
                <a href="index.php" class="btn btn-cancel">Batal</a>
            </div>
        </form>
    </div>

    <script>
        // Fungsi untuk menghitung subtotal otomatis
        function hitungSubtotal() {
            const produkSelect = document.getElementById('produkSelect');
            const ukuranSelect = document.getElementById('ukuranSelect');
            const toppingSelect = document.getElementById('toppingSelect');
            const jumlahInput = document.getElementById('jumlah');
            
            const hargaProduk = produkSelect.selectedOptions[0]?.dataset.harga || 0;
            const hargaUkuran = ukuranSelect.value === 'M' ? 3000 : ukuranSelect.value === 'L' ? 5000 : 0;
            const hargaTopping = toppingSelect.selectedOptions[0]?.dataset.harga || 0;
            const jumlah = jumlahInput.value || 0;
            
            const subtotal = (parseInt(hargaProduk) + parseInt(hargaUkuran) + parseInt(hargaTopping)) * parseInt(jumlah);
            document.getElementById('subtotal').value = subtotal;
        }
        
        // Tambahkan event listeners
        document.getElementById('produkSelect').addEventListener('change', hitungSubtotal);
        document.getElementById('ukuranSelect').addEventListener('change', hitungSubtotal);
        document.getElementById('toppingSelect').addEventListener('change', hitungSubtotal);
        document.getElementById('jumlah').addEventListener('input', hitungSubtotal);
        
        // Hitung subtotal awal
        hitungSubtotal();
    </script>
</body>
</html>