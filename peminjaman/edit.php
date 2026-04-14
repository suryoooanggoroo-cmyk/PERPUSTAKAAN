<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");
$data = mysqli_fetch_array($query);

$buku = mysqli_query($conn, "SELECT * FROM buku");
$anggota = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Peminjaman</title>
</head>
<body>
    <h2>Form Edit Peminjaman</h2>
    
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_peminjaman" value="<?= $data['id_peminjaman'] ?>">
        
        <label>Pilih Buku:</label><br>
        <select name="id_buku" required>
            <?php while($b = mysqli_fetch_array($buku)): ?>
                <option value="<?= $b['id_buku'] ?>" <?= $data['id_buku']==$b['id_buku'] ? 'selected' : '' ?>><?= $b['judul'] ?></option>
            <?php endwhile; ?>
        </select><br><br>
        
        <label>Pilih Anggota:</label><br>
        <select name="id_anggota" required>
            <?php while($a = mysqli_fetch_array($anggota)): ?>
                <option value="<?= $a['id_anggota'] ?>" <?= $data['id_anggota']==$a['id_anggota'] ? 'selected' : '' ?>><?= $a['nama'] ?></option>
            <?php endwhile; ?>
        </select><br><br>
        
        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tanggal_pinjam" value="<?= $data['tanggal_pinjam'] ?>" required><br><br>
        
        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tanggal_kembali" value="<?= $data['tanggal_kembali'] ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
