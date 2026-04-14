<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>
<body>
    <h2>Data Anggota</h2>
    <a href="tambah.php">Tambah Anggota</a><br><br>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php while($data = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $data['id_anggota'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_telp'] ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_anggota'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $data['id_anggota'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="../">Kembali ke Menu Utama</a>
</body>
</html>
