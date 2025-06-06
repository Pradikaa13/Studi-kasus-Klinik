<?php
include "config.php";

$sql = "SELECT id_obat, nama_obat, harga_obat FROM Obat";
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
            <a href="transaksi.php">Transaksi</a>
        </nav>
    </header>

    <main>
        <h2>Data Obat</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Obat</th>
                <th>Harga</th>               
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id_obat']."</td>";
                echo "<td>".$row['nama_obat']."</td>";
                echo "<td>".$row['harga_obat']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>