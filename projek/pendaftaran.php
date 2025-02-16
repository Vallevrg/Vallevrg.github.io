<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Sekolah</title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>
<body>

<div class="hover-menu">
        <div class="back-button" onclick="goBack()">
            <img src="gambar/back.png" alt="Panah Kiri">
        </div>
</div>


    <h1>Formulir Pendaftaran</h1>
    <form action="proses-pendaftaran.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Data Pribadi</legend>
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br><br>

            <label for="alamat">Alamat:</label><br>
            <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>

            <label for="no_hp">Nomor HP:</label>
            <input type="tel" id="no_hp" name="no_hp" pattern="[0-9]{10,13}" required><br><br>
        </fieldset>

        <fieldset>
            <legend>Data Orang Tua/Wali</legend>
            <label for="nama_ortu">Nama Orang Tua/Wali:</label>
            <input type="text" id="nama_ortu" name="nama_ortu" required><br><br>

            <label for="pekerjaan_ortu">Pekerjaan:</label>
            <input type="text" id="pekerjaan_ortu" name="pekerjaan_ortu" required><br><br>

            <label for="no_hp_ortu">Nomor HP Orang Tua/Wali:</label>
            <input type="tel" id="no_hp_ortu" name="no_hp_ortu" pattern="[0-9]{10,13}" required><br><br>
        </fieldset>

        <fieldset>
            <legend>Informasi Tambahan</legend>
            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required><br><br>

            <label for="minat">Minat/Bakat: (opsional)</label>
            <input type="text" id="minat" name="minat" ><br><br>

            <label for="pilihan_jurusan">Pilihan Jurusan:</label>
            <select id="pilihan_jurusan" name="pilihan_jurusan" required>
                <option value="TJKT">TJKT</option>
                <option value="MPLB">MPLB</option>
                <option value="PM">PM</option>
                <option value="AKP">AKP</option>
            </select><br><br>
        </fieldset>

        <fieldset>
            <legend>Unggah Berkas</legend>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

            <label for="ijazah">Ijazah:</label>
            <input type="file" id="ijazah" name="ijazah" accept=".pdf,.jpg,.png" required><br><br>

            <label for="nilai">Nilai:</label>
            <input type="file" id="nilai" name="nilai" accept=".pdf,.jpg,.png" required><br><br>

            <label for="akta">Akta Kelahiran:</label>
            <input type="file" id="akta" name="akta" accept=".pdf,.jpg,.png" required><br><br>

            <label for="kk">Kartu Keluarga (KK):</label>
            <input type="file" id="kk" name="kk" accept=".pdf,.jpg,.png" required><br><br>

            <label for="skl">Surat Keterangan Lulus (SKL):</label>
            <input type="file" id="skl" name="skl" accept=".pdf,.jpg,.png" required><br><br>
        </fieldset>

        <button type="submit">Daftar</button>
    </form>
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

    <script>
        // Fungsi untuk tombol kembali
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>