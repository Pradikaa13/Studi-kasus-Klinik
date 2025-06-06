<?php
include "config.php";

$sql = "SELECT pm.id_pemeriksaan, p.nama_pelanggan, d.nama_dokter, pm.tanggal_pemeriksaan, pm.diagnosa, pm.nama_obat 
        FROM Pemeriksaan pm
        JOIN Pelanggan p ON pm.id_pelanggan = p.id_pelanggan
        JOIN Dokter d ON pm.id_dokter = d.id_dokter";

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
        <h2>Rekam Medis</h2>
        <table>
            <tr>
                <th>ID Pemeriksaan</th>
                <th>Tanggal Pemeriksaan</th>
                <th>Nama Pelanggan</th>
                <th>Nama Dokter</th>
                <th>Diagnosa</th>
                <th>Nama Obat</th>
         
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id_pemeriksaan']."</td>";
                echo "<td>".$row['tanggal_pemeriksaan']."</td>";
                echo "<td>".$row['nama_pelanggan']."</td>";
                echo "<td>".$row['nama_dokter']."</td>";
                echo "<td>".$row['diagnosa']."</td>";
                echo "<td>".$row['nama_obat']."</td>";
                echo "</tr>";

            }
            ?>
        </table>
    </main>
</body>
</html>