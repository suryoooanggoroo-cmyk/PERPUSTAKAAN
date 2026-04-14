<?php
include '../koneksi.php';
$buku = mysqli_query($conn, "SELECT * FROM buku");
$anggota = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Peminjaman</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Form Tambah Peminjaman</h2>
    
    <form action="proses_tambah.php" method="POST">
        <label>Pilih Buku:</label><br>
        <select name="id_buku" required>
            <option value="">-- Pilih Buku --</option>
            <?php while($b = mysqli_fetch_array($buku)): ?>
                <option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>
            <?php endwhile; ?>
        </select><br><br>
        
        <label>Pilih Anggota:</label><br>
        <select name="id_anggota" required>
            <option value="">-- Pilih Anggota --</option>
            <?php while($a = mysqli_fetch_array($anggota)): ?>
                <option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?></option>
            <?php endwhile; ?>
        </select><br><br>
        
        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tgl_peminjaman" required><br><br>
        
        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tgl_kembali" required><br><br>
        
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
