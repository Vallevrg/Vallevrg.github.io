<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="home">
    <div class="image">
        <img src="gambar/LOGO GOLDEN.png" alt="">
    </div>
    <div class="container">
        <h2>Register</h2>
        <form action="proses-register.php" method="POST"> <!-- Form untuk registrasi -->
            <input type="text" name="nama_lengkap" placeholder="Full Name" required><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm_password" placeholder="Confirm Your password" required><br>
            
            <!-- Pilihan Kelas -->
            <label for="class">Choose Class:</label>
            <select name="class" required>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
            </select><br>
            
            <button type="submit" name="register">Register</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p> <!-- Link ke halaman login -->
    </div>
</body>
</html>