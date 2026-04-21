<?php
include '../cek_login.php';
include '../koneksi.php';
// Join to show names instead of IDs
$query = mysqli_query($conn, "
    SELECT peminjaman.*, buku.judul, anggota.nama 
    FROM peminjaman 
    JOIN buku ON peminjaman.id_buku = buku.id_buku 
    JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Data Peminjaman</h2>
    <a href="tambah.php" class="btn-tambah">Tambah Peminjaman</a><br><br>
    <table>
        <tr>
            <th>ID Peminjaman</th>
            <th>Buku</th>
            <th>Anggota (Peminjam)</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php while($data = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $data['id_peminjama'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tgl_peminjaman'] ?></td>
            <td><?= $data['tgl_kembali'] ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_peminjama'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $data['id_peminjama'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="../">Kembali ke Menu Utama</a>
</body>
</html>
