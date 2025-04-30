<?php
include 'config.php';

$id_transaksi = $_GET['id'];
$id_produk = $_GET['prod'];

$sql = "DELETE FROM detail_transaksi WHERE Id_transaksi='$id_transaksi' AND Id_produk='$id_produk'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>