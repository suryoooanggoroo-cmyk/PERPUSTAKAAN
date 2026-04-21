<?php
session_start();

// Jika user belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    // Tentukan path relatif ke login.php
    $currentDir = dirname($_SERVER['SCRIPT_NAME']);
    $rootDir = '/perpustakaan';
    
    if ($currentDir === $rootDir || $currentDir === $rootDir . '/') {
        header("Location: login.php");
    } else {
        header("Location: ../login.php");
    }
    exit();
}
?>
