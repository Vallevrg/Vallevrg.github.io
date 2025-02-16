<?php
// Mulai session
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'ppdb');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah form login disubmit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil data user dari database berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah username ditemukan
    if ($result->num_rows > 0) {
        // Ambil data user
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Jika password cocok, simpan data ke session
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
            $_SESSION['class'] = $row['class']; // Simpan kelas ke session

            // Redirect berdasarkan kelas
            if ($row['class'] == '1') {
                header("Location: home.php"); // Untuk kelas 1
            } elseif ($row['class'] == '2') {
                header("Location: dashboard.php"); // Untuk kelas 2
            }
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}

$conn->close();
?>