<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM buku");
?>

<!-- Tombol Tambah Data -->
<a href="tambah.php" 
   class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>id_buku</th>
        <th>judul</th>
        <th>penulis</th>
        <th>penerbit</th>
        <th>stok</th>
    </tr>
    <?php while($data = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['kelas'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
    <!-- Di bagian tombol hapus -->
<a href="hapus.php?id=<?= $data['id'] ?>"
   onclick="return confirm('Yakin hapus data ini?')">
    Hapus
</a>
</table>
