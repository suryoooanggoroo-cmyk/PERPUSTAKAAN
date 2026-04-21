<?php include 'cek_login.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan Modern</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard {
            display: flex;
            gap: 30px;
            margin-top: 40px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 40px;
            width: 300px;
            text-align: center;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 30px -5px rgba(0, 0, 0, 0.2), 0 15px 15px -5px rgba(0, 0, 0, 0.1);
            border-color: var(--accent);
        }

        .card h3 {
            color: #f8fafc;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .card-btn {
            display: inline-block;
            background: rgba(59, 130, 246, 0.1);
            color: #60a5fa;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            width: 100%;
        }

        .card-btn:hover {
            background: var(--accent);
            color: white;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }

        .hero-title {
            text-align: center;
            margin-bottom: 10px;
            margin-top: 50px;
        }
        
        .hero-subtitle {
            text-align: center;
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="./" class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>
            </svg>
            Perpustakaan
        </a>
        <div class="navbar-user">
            <div class="user-info">
                <div class="user-avatar"><?= strtoupper(substr($_SESSION['nama_lengkap'], 0, 1)) ?></div>
                <span><?= htmlspecialchars($_SESSION['nama_lengkap']) ?></span>
            </div>
            <a href="logout.php" class="btn-logout" onclick="return confirm('Yakin ingin logout?')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
                Logout
            </a>
        </div>
    </nav>

    <div class="hero-title">
        <h2>Sistem Manajemen Perpustakaan</h2>
    </div>
    <div class="hero-subtitle">
        Pilih modul yang ingin Anda kelola hari ini.
    </div>

    <div class="dashboard">
        <!-- Modul Buku -->
        <div class="card">
            <h3>Buku</h3>
            <p>Kelola seluruh katalog buku di perpustakaan termasuk judul, penulis, dan stok yang tersedia.</p>
            <a href="buku/" class="card-btn">Kelola Data Buku</a>
        </div>

        <!-- Modul Anggota -->
        <div class="card">
            <h3>Anggota</h3>
            <p>Atur basis data untuk anggota perpustakaan yang terdaftar, nama, alamat, dan info kontak.</p>
            <a href="anggota/" class="card-btn">Kelola Anggota</a>
        </div>

        <!-- Modul Peminjaman -->
        <div class="card">
            <h3>Peminjaman</h3>
            <p>Jadwalkan transasksi peminjaman dan pengembalian buku dari anggota yang tergabung secara real-time.</p>
            <a href="peminjaman/" class="card-btn">Kelola Peminjaman</a>
        </div>
    </div>

</body>
</html>
