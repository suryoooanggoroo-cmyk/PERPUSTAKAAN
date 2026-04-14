<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Form Edit Anggota</h2>
    
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_anggota" value="<?= $data['id_anggota'] ?>">
        
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat" required><?= $data['alamat'] ?></textarea><br><br>
        
        <label>No Telepon:</label><br>
        <input type="text" name="telp" value="<?= $data['telp'] ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
