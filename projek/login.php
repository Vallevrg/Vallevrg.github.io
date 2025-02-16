<?php
session_start();

// Cek apakah ada pesan sukses
if (isset($_SESSION['success_message'])) {
    echo '<p>' . $_SESSION['success_message'] . '</p>';
    // Hapus pesan setelah ditampilkan sekali
    unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css"> <!-- Menghubungkan dengan file CSS -->
</head>
<body>
    <div class="home">
        <div class="image">
            <img src="gambar/LOGO GOLDEN.png" alt="">
        </div>
    <div class="container">
        <h2>Login</h2>
        <form action="proses-login.php" method="POST"> <!-- Form akan dikirim ke process.php -->
            <input type="text" name="username" placeholder="Enter Your Username" required><br>
            <input type="password" name="password" placeholder="Enter Your Password" required><br>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p> <!-- Link ke halaman register -->
    </div>
    </div>
</body>
</html>
