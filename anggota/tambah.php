<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title>
</head>
<body>
    <h2>Form Tambah Anggota</h2>
    
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>
        
        <label>No Telepon:</label><br>
        <input type="text" name="no_telp" required><br><br>
        
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
