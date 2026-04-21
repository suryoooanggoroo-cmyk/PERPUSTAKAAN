<?php
include '../cek_login.php';
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Form Edit Buku</h2>
    
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_buku" value="<?= $data['id_buku'] ?>">
        
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>
        
        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required><br><br>
        
        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" required><br><br>
        
        <label>Stok:</label><br>
        <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br><br>
        
        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>