<?php
include "config.php";

$sql = "SELECT no_transaksi, tanggal, nama_pelanggan, nama_dokter, nama_obat, qty, harga_obat, total_biaya FROM Nota_Transaksi";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat - Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Klinik Sehat</h1>
        <nav>
        <a href="pelanggan.php">Pelanggan</a>
            <a href="dokter.php">Dokter</a>
            <a href="obat.php">Obat</a>
            <a href="rekam.php">Rekam Medis</a>
        </nav>
    </header>

    <main>
        <h2>Riwayat Transaksi</h2>
        <table>
            <tr>
                <th>No Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Pelanggan</th>
                <th>Nama Dokter</th>
                <th>Nama Obat</th>
                <th>Qty</th>
                <th>Harga Satuan</th>
                <th>Total</th>
         
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['no_transaksi']."</td>";
                echo "<td>".$row['tanggal']."</td>";
                echo "<td>".$row['nama_pelanggan']."</td>";
                echo "<td>".$row['nama_dokter']."</td>";
                echo "<td>".$row['nama_obat']."</td>";
                echo "<td>".$row['qty']."</td>";
                echo "<td>".$row['harga_obat']."</td>";
                echo "<td>".$row['total_biaya']."</td>";
                echo "</tr>";

            }
            ?>
        </table>
    </main>
</body>
</html>