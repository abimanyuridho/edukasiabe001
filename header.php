<?php
// Mengambil nama file yang sedang dibuka untuk menandai menu yang aktif
$halaman_aktif = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Kesehatan: Mengenal Sifilis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="bagian-atas">
        <div class="wadah">
            <h1>Portal Edukasi Kesehatan</h1>
            <p style="text-align: center;">Informasi Penyakit Menular: Sifilis (Raja Singa)</p>
        </div>
    </header>

    <nav class="menu-navigasi">
        <div class="wadah">
            <ul>
                <li><a href="index.php" class="<?= ($halaman_aktif == 'index.php') ? 'aktif' : ''; ?>">Home</a></li>
                <li><a href="profil.php" class="<?= ($halaman_aktif == 'profil.php') ? 'aktif' : ''; ?>">Profil Penyakit</a></li>
                <li><a href="gejala.php" class="<?= ($halaman_aktif == 'gejala.php') ? 'aktif' : ''; ?>">Gejala</a></li>
                <li><a href="penyebab.php" class="<?= ($halaman_aktif == 'penyebab.php') ? 'aktif' : ''; ?>">Penyebab & Penularan</a></li>
                <li><a href="pencegahan.php" class="<?= ($halaman_aktif == 'pencegahan.php') ? 'aktif' : ''; ?>">Pencegahan</a></li>
                <li><a href="penanganan.php" class="<?= ($halaman_aktif == 'penanganan.php') ? 'aktif' : ''; ?>">Penanganan</a></li>
                <li><a href="konsultasi.php" class="<?= ($halaman_aktif == 'konsultasi.php') ? 'aktif' : ''; ?>">Konsultasi</a></li>
                <li><a href="kontak.php" class="<?= ($halaman_aktif == 'kontak.php') ? 'aktif' : ''; ?>">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <main class="wadah konten-utama">
