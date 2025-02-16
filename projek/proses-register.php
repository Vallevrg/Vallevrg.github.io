<?php
// Mulai session
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'ppdb');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah form registrasi disubmit
if (isset($_POST['register'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $class = $_POST['class'];

    // Cek apakah password dan konfirmasi password cocok
    if ($password === $confirm_password) {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data ke database
        $sql = "INSERT INTO users (username, password, nama_lengkap, class) VALUES ('$username', '$hashed_password', '$nama_lengkap', '$class')";
        
        if ($conn->query($sql) === TRUE) {
            // Redirect ke halaman login setelah registrasi sukses
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Password dan konfirmasi password tidak cocok!";
    }
}

$conn->close();
?>