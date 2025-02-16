<?php
// Mulai session
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <script defer src="script.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul class="hover-menu">
                <div class="menu-left">
                <img src="gambar/LOGO GOLDEN.png" alt="Logo" class="menu-logo" style="width: 50px; height: 25;">
                    <li><a href="#info1">Tentang Kami</a></li>
                    <li><a href="#info2">Konsentrasi Keahlian</a></li>
                    <li><a href="#info3">Ekstrakulikuler</a></li>
                </div>
                <div class="menu-right">
                    <li><a href="pendaftaran.php">Daftar</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <main>
        <section id="info1" class="info-section">
            <div class="info-container">
                <div class="info-content">
                    <h2>Tentang Kami</h2>
                    <p>SMK Golden berdiri pada tahun 2015 dibawah naungan Yayasan Nurul Walidain T.H. dibawah pimpinan Drs. H. A. Hanapi, M. Pd. I yang terletak di Jl. Letkol Atang Sanjaya RT 01/02 Desa Pasir Gaok Kecamatan Ranca Bungur Kabupaten Bogor.
                    Tujuan sekolah sebagai bagian dari tujuan pendidikan nasional,adalah meningkatkan kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut, serta bagian dari tujuan pendidikan menengah kejuruan yaitu mempersiapkan tamatan yang berkualitas yang dapat diterima di Dunia kerja, sesuai dengan bidang keahliannya masing – masing, serta mampu mengikuti pendidikan ke tingkatan yang lebih tinggi.</p>
                </div>
            </div>
        </section>

        <section id="info2" class="info-section">
    <div class="info-container-2">
        <div class="info-content-2">
            <h2>Konsentrasi Keahlian</h2>
            <p>SMK Golden memiliki 4 Konsentrasi Keahlian</p>
        </div>
        
        <div class="image-gallery">
    <div class="image-item">
        <img src="gambar/tjkt.png" alt="Gambar 1" class="gallery-image">
        <p class="image-description">
            <a href="tjkt.html">TEKNIK JARINGAN KOMPUTER DAN TEKNOLOGI <br>(TJKT)</a>
        </p>
    </div>
    <div class="image-item">
        <img src="gambar/pm.png" alt="Gambar 2" class="gallery-image">
        <p class="image-description">
            <a href="pm.html">PEMASARAN <br>(PM)</a>
        </p>
    </div>
    <div class="image-item">
        <img src="gambar/mplb.png" alt="Gambar 3" class="gallery-image">
        <p class="image-description">
            <a href="mplb.html">MANAJEMEN BISNIS DAN LAYANAN BISNIS <br>(MPLB)</a>
        </p>
    </div>
    <div class="image-item">
        <img src="gambar/akp.png" alt="Gambar 4" class="gallery-image">
        <p class="image-description">
            <a href="akp.html">AKOMODASI PERHOTELAN <br>(AKP)</a>
        </p>
    </div>
</div>

</section>
<section id="info3" class="info-section">
    <div class="info-container">
        <div class="info-content">
            <h2>Ekstrakurikuler</h2>
            <p>Berikut adalah ekstrakurikuler yang tersedia di sekolah kami:</p>
            <div class="eskul-list">
                <div class="eskul-item">
                    <img src="gambar/pramuka.JPG" alt="Pramuka" class="eskul-image">
                    <p>Pramuka</p>
                </div>
                <div class="eskul-item">
                    <img src="gambar/paskib.JPG" alt="Paskibra" class="eskul-image">
                    <p>Paskibra</p>
                </div>
                <div class="eskul-item">
                    <img src="gambar/basket.JPG" alt="Basket" class="eskul-image">
                    <p>Basket</p>
                </div>
                <div class="eskul-item">
                    <img src="gambar/futsal.JPG" alt="Futsal" class="eskul-image">
                    <p>Futsal</p>
                </div>
                <div class="eskul-item">
                    <img src="gambar/padus2.jpeg" alt="Paduan Suara" class="eskul-image">
                    <p>Paduan Suara</p>
                </div>
                <div class="eskul-item">
                    <img src="path-to-image/english-club.jpg" alt="English Club" class="eskul-image">
                    <p>English Club</p>
                </div>
            </div>
        </div>
    </div>
</section>
        <footer>
    <div class="footer-container">
        <!-- Kontak -->
        <div class="footer-section">
            <h3>Kontak</h3>
            <p>Email: smkgolden18@gmail.com</p>
            <p>Telepon: (0251) 7596752</p>
        </div>

        <!-- Alamat -->
        <div class="footer-section">
            <h3>Alamat</h3>
            <p>Jl. Atang Senjaya No.365, Bantarjaya, Kec. Ranca Bungur</p>
            <p> Kabupaten Bogor, Jawa Barat 16310</p>
        </div>

        <!-- Media Sosial -->
        <div class="footer-section">
            <h3>Media Sosial</h3>
            <p><a href="https://www.facebook.com/smkgoldenbogor" target="_blank">Facebook</a></p>
            <p><a href="https://www.youtube.com/@smkgolden9185" target="_blank">YouTube</p>
            <p><a href="https://www.instagram.com/smkgolden/" target="_blank">Instagram</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 MyWebsite. All Rights Reserved.</p>
    </div>
</footer>
    </main>
</body>
</html