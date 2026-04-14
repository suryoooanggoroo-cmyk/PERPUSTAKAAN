<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h2>Data Buku</h2>
    <a href="tambah.php">Tambah Buku</a><br><br>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while($data = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $data['id_buku'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['penulis'] ?></td>
            <td><?= $data['penerbit'] ?></td>
            <td><?= $data['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_buku'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $data['id_buku'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="../">Kembali ke Menu Utama</a>
</body>
</html>
