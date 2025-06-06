<?php
include "config.php";

$sql = "SELECT id_pelanggan, nama_pelanggan, alamat_pelanggan, jenis_kelamin, umur_pelanggan, kategori_umur FROM Pelanggan";
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
        <h2>Data Pelanggan</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Kategori</th>                
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id_pelanggan']."</td>";
                echo "<td>".$row['nama_pelanggan']."</td>";
                echo "<td>".$row['alamat_pelanggan']."</td>";
                echo "<td>".$row['jenis_kelamin']."</td>";
                echo "<td>".$row['umur_pelanggan']."</td>";
                echo "<td>".$row['kategori_umur']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>