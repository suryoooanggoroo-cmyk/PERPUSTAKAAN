<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Data Anggota</h2>
    <a href="tambah.php">Tambah Anggota</a><br><br>
    <table>
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
        </tr>
        <?php while($data = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $data['id_anggota'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['telp'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="../">Kembali ke Menu Utama</a>
</body>
</html>
