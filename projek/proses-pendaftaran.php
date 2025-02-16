
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = htmlspecialchars($_POST["nama"]);
    $tgl_lahir = htmlspecialchars($_POST["tgl_lahir"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $nama_ortu = htmlspecialchars($_POST["nama_ortu"]);
    $pekerjaan_ortu = htmlspecialchars($_POST["pekerjaan_ortu"]);
    $no_hp_ortu = htmlspecialchars($_POST["no_hp_ortu"]);
    $asal_sekolah = htmlspecialchars($_POST["asal_sekolah"]);
    $minat = htmlspecialchars($_POST["minat"]);
    $pilihan_jurusan = htmlspecialchars($_POST["pilihan_jurusan"]);

    // Mengunggah berkas
    $uploads_dir = 'uploads';
    if (!is_dir($uploads_dir)) mkdir($uploads_dir);

    $foto = $_FILES["foto"]["name"];
    $ijazah = $_FILES["ijazah"]["name"];
    $nilai = $_FILES["nilai"]["name"];
    $akta = $_FILES["akta"]["name"];
    $kk = $_FILES["kk"]["name"];
    $skl = $_FILES["skl"]["name"];

    move_uploaded_file($_FILES["foto"]["tmp_name"], "$uploads_dir/$foto");
    move_uploaded_file($_FILES["ijazah"]["tmp_name"], "$uploads_dir/$ijazah");
    move_uploaded_file($_FILES["nilai"]["tmp_name"], "$uploads_dir/$nilai");
    move_uploaded_file($_FILES["akta"]["tmp_name"], "$uploads_dir/$akta");
    move_uploaded_file($_FILES["kk"]["tmp_name"], "$uploads_dir/$kk");
    move_uploaded_file($_FILES["skl"]["tmp_name"], "$uploads_dir/$skl");

    // Proses penyimpanan ke database
    $conn = new mysqli("localhost", "root", "", "ppdb");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO siswa (nama, tgl_lahir, jenis_kelamin, alamat, no_hp, nama_ortu, pekerjaan_ortu, no_hp_ortu, asal_sekolah, minat, pilihan_jurusan, foto, ijazah, nilai, akta, kk, skl)
            VALUES ('$nama', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$no_hp', '$nama_ortu', '$pekerjaan_ortu', '$no_hp_ortu', '$asal_sekolah', '$minat', '$pilihan_jurusan', '$foto', '$ijazah', '$nilai', '$akta', '$kk', '$skl')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil. Berkas Anda berhasil diunggah,";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<html>
    <body style="display:flex; justify-content:center; align-items:center; margin-top:25%"> <a href="home.php">Kembali ke Home.</a></body>
</html>